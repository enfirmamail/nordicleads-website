# WordPress Theme FTP Upload Script
# This script uploads the twentytwentyfive-child theme to your WordPress hosting

param(
    [string]$FtpHost = "linux101.unoeuro.com",
    [string]$FtpUser = "nordicleads.dk",
    [string]$FtpPass = "gbDay4REGwxF5kmtfHh9",
    [string]$BasePath = "/public_html",
    [string]$FtpPath = "/wp-content/themes/twentytwentyfive-child"
)

# If credentials not provided, ask for them
if ([string]::IsNullOrEmpty($FtpHost)) {
    $FtpHost = Read-Host "Enter FTP Host (e.g., ftp.yourdomain.com or yourdomain.com)"
}
if ([string]::IsNullOrEmpty($FtpUser)) {
    $FtpUser = Read-Host "Enter FTP Username"
}
if ([string]::IsNullOrEmpty($FtpPass)) {
    $SecurePass = Read-Host "Enter FTP Password" -AsSecureString
    $BSTR = [System.Runtime.InteropServices.Marshal]::SecureStringToBSTR($SecurePass)
    $FtpPass = [System.Runtime.InteropServices.Marshal]::PtrToStringAuto($BSTR)
}
if ([string]::IsNullOrEmpty($BasePath)) {
    $BasePathInput = Read-Host "Enter base path (e.g., /public_html or /www - leave empty if WordPress is in root)"
    if ($BasePathInput) {
        $BasePath = $BasePathInput
        $FtpPath = "$BasePath$FtpPath"
    }
}

# Theme directory
$ThemeDir = "wp-content\themes\twentytwentyfive-child"
$LocalPath = Join-Path $PSScriptRoot $ThemeDir

if (-not (Test-Path $LocalPath)) {
    Write-Host "Error: Theme directory not found at $LocalPath" -ForegroundColor Red
    exit 1
}

Write-Host "`nStarting FTP upload..." -ForegroundColor Green
Write-Host "Host: $FtpHost" -ForegroundColor Cyan
Write-Host "Remote Path: $FtpPath" -ForegroundColor Cyan
Write-Host "Local Path: $LocalPath`n" -ForegroundColor Cyan

# Function to upload a file via FTP
function Upload-File {
    param(
        [string]$LocalFile,
        [string]$RemoteFile,
        [string]$FtpHost,
        [string]$FtpUser,
        [string]$FtpPass
    )
    
    try {
        $FtpUri = "ftp://$FtpHost$RemoteFile"
        $FtpRequest = [System.Net.FtpWebRequest]::Create($FtpUri)
        $FtpRequest.Credentials = New-Object System.Net.NetworkCredential($FtpUser, $FtpPass)
        $FtpRequest.Method = [System.Net.WebRequestMethods+Ftp]::UploadFile
        $FtpRequest.UseBinary = $true
        $FtpRequest.UsePassive = $true
        
        $FileContent = [System.IO.File]::ReadAllBytes($LocalFile)
        $FtpRequest.ContentLength = $FileContent.Length
        
        $RequestStream = $FtpRequest.GetRequestStream()
        $RequestStream.Write($FileContent, 0, $FileContent.Length)
        $RequestStream.Close()
        
        $Response = $FtpRequest.GetResponse()
        $Response.Close()
        
        return $true
    }
    catch {
        Write-Host "Error uploading $LocalFile : $_" -ForegroundColor Red
        return $false
    }
}

# Function to check if directory exists
function Test-FtpDirectory {
    param(
        [string]$RemotePath,
        [string]$FtpHost,
        [string]$FtpUser,
        [string]$FtpPass
    )
    
    try {
        $FtpUri = "ftp://$FtpHost$RemotePath"
        $FtpRequest = [System.Net.FtpWebRequest]::Create($FtpUri)
        $FtpRequest.Credentials = New-Object System.Net.NetworkCredential($FtpUser, $FtpPass)
        $FtpRequest.Method = [System.Net.WebRequestMethods+Ftp]::ListDirectory
        $FtpRequest.UsePassive = $true
        
        $Response = $FtpRequest.GetResponse()
        $Response.Close()
        return $true
    }
    catch {
        return $false
    }
}

# Function to create directory via FTP
function Create-FtpDirectory {
    param(
        [string]$RemotePath,
        [string]$FtpHost,
        [string]$FtpUser,
        [string]$FtpPass
    )
    
    # Check if directory already exists
    if (Test-FtpDirectory -RemotePath $RemotePath -FtpHost $FtpHost -FtpUser $FtpUser -FtpPass $FtpPass) {
        return $true
    }
    
    try {
        $FtpUri = "ftp://$FtpHost$RemotePath"
        $FtpRequest = [System.Net.FtpWebRequest]::Create($FtpUri)
        $FtpRequest.Credentials = New-Object System.Net.NetworkCredential($FtpUser, $FtpPass)
        $FtpRequest.Method = [System.Net.WebRequestMethods+Ftp]::MakeDirectory
        $FtpRequest.UsePassive = $true
        
        $Response = $FtpRequest.GetResponse()
        $Response.Close()
        return $true
    }
    catch {
        return $false
    }
}

# Create directory structure first
Write-Host "`nCreating directory structure..." -ForegroundColor Cyan
$Directories = Get-ChildItem -Path $LocalPath -Recurse -Directory
$Directories | ForEach-Object {
    $RelativePath = $_.FullName.Substring($LocalPath.Length + 1)
    $RemoteDir = "$FtpPath/$RelativePath".Replace('\', '/')
    Create-FtpDirectory -RemotePath $RemoteDir -FtpHost $FtpHost -FtpUser $FtpUser -FtpPass $FtpPass | Out-Null
}
# Create base directory
Create-FtpDirectory -RemotePath $FtpPath -FtpHost $FtpHost -FtpUser $FtpUser -FtpPass $FtpPass | Out-Null
# Create assets directory
Create-FtpDirectory -RemotePath "$FtpPath/assets" -FtpHost $FtpHost -FtpUser $FtpUser -FtpPass $FtpPass | Out-Null
# Create logos directory
Create-FtpDirectory -RemotePath "$FtpPath/assets/logos" -FtpHost $FtpHost -FtpUser $FtpUser -FtpPass $FtpPass | Out-Null

Write-Host "Directory structure created.`n" -ForegroundColor Green

# Upload all files recursively
$Uploaded = 0
$Failed = 0

Get-ChildItem -Path $LocalPath -Recurse -File | ForEach-Object {
    $RelativePath = $_.FullName.Substring($LocalPath.Length + 1)
    $RemoteFile = "$FtpPath/$RelativePath".Replace('\', '/')
    
    Write-Host "Uploading: $RelativePath" -ForegroundColor Yellow
    if (Upload-File -LocalFile $_.FullName -RemoteFile $RemoteFile -FtpHost $FtpHost -FtpUser $FtpUser -FtpPass $FtpPass) {
        $Uploaded++
        Write-Host "  [OK] Success" -ForegroundColor Green
    } else {
        $Failed++
        Write-Host "  [FAILED]" -ForegroundColor Red
    }
}

Write-Host "`nUpload complete!" -ForegroundColor Green
Write-Host "Successfully uploaded: $Uploaded files" -ForegroundColor Green
if ($Failed -gt 0) {
    Write-Host "Failed: $Failed files" -ForegroundColor Red
}
