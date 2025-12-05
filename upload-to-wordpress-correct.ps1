# WordPress Theme FTP Upload Script - Correct File Locations
# This script uploads files to their correct locations:
# - Root files (robots.txt, sitemap.xml, etc.) go to /public_html/
# - Theme files go to /wp-content/themes/twentytwentyfive-child/
# - security.txt goes to /public_html/.well-known/security.txt

param(
    [string]$FtpHost = "",
    [string]$FtpUser = "",
    [string]$FtpPass = "",
    [string]$BasePath = ""
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
    } else {
        $BasePath = "/public_html"
    }
}

# Paths
$ThemeDir = "wp-content\themes\twentytwentyfive-child"
$LocalPath = Join-Path $PSScriptRoot $ThemeDir

if (-not (Test-Path $LocalPath)) {
    Write-Host "Error: Theme directory not found at $LocalPath" -ForegroundColor Red
    exit 1
}

Write-Host "`nStarting FTP upload with correct file locations..." -ForegroundColor Green
Write-Host "Host: $FtpHost" -ForegroundColor Cyan
Write-Host "Base Path: $BasePath" -ForegroundColor Cyan
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

# Files that should go to ROOT (from theme directory)
$RootFiles = @(
    "robots.txt",
    "sitemap.xml",
    "humans.txt",
    "llms.txt"
)

# Legal PHP files that should go to ROOT (from project root)
$LegalFiles = @(
    "privacy-policy.php",
    "terms-and-conditions.php",
    "gdpr-info.php",
    "cookie-policy.php"
)

# security.txt goes to .well-known/
$SecurityFile = "security.txt"

# Create .well-known directory
Write-Host "Creating .well-known directory..." -ForegroundColor Cyan
Create-FtpDirectory -RemotePath "$BasePath/.well-known" -FtpHost $FtpHost -FtpUser $FtpUser -FtpPass $FtpPass | Out-Null

# Upload root files
Write-Host "`nUploading ROOT files..." -ForegroundColor Yellow
$RootUploaded = 0
$RootFailed = 0

foreach ($File in $RootFiles) {
    $LocalFile = Join-Path $LocalPath $File
    if (Test-Path $LocalFile) {
        $RemoteFile = "$BasePath/$File"
        Write-Host "  Uploading to root: $File" -ForegroundColor Yellow
        if (Upload-File -LocalFile $LocalFile -RemoteFile $RemoteFile -FtpHost $FtpHost -FtpUser $FtpUser -FtpPass $FtpPass) {
            $RootUploaded++
            Write-Host "    [OK] Success" -ForegroundColor Green
        } else {
            $RootFailed++
            Write-Host "    [FAILED]" -ForegroundColor Red
        }
    } else {
        Write-Host "  Warning: $File not found locally" -ForegroundColor Yellow
    }
}

# Upload security.txt to .well-known/
Write-Host "`nUploading security.txt to .well-known/..." -ForegroundColor Yellow
$SecurityLocal = Join-Path $LocalPath $SecurityFile
if (Test-Path $SecurityLocal) {
    $SecurityRemote = "$BasePath/.well-known/security.txt"
    if (Upload-File -LocalFile $SecurityLocal -RemoteFile $SecurityRemote -FtpHost $FtpHost -FtpUser $FtpUser -FtpPass $FtpPass) {
        Write-Host "  [OK] security.txt uploaded to .well-known/" -ForegroundColor Green
    } else {
        Write-Host "  [FAILED] security.txt upload failed" -ForegroundColor Red
    }
} else {
    Write-Host "  Warning: security.txt not found locally" -ForegroundColor Yellow
}

# Upload legal PHP files from project root
Write-Host "`nUploading LEGAL PHP files to root..." -ForegroundColor Yellow
$LegalUploaded = 0
$LegalFailed = 0

foreach ($File in $LegalFiles) {
    $LocalFile = Join-Path $PSScriptRoot $File
    if (Test-Path $LocalFile) {
        $RemoteFile = "$BasePath/$File"
        Write-Host "  Uploading to root: $File" -ForegroundColor Yellow
        if (Upload-File -LocalFile $LocalFile -RemoteFile $RemoteFile -FtpHost $FtpHost -FtpUser $FtpUser -FtpPass $FtpPass) {
            $LegalUploaded++
            Write-Host "    [OK] Success" -ForegroundColor Green
        } else {
            $LegalFailed++
            Write-Host "    [FAILED]" -ForegroundColor Red
        }
    } else {
        Write-Host "  Warning: $File not found locally" -ForegroundColor Yellow
    }
}

# Create theme directory structure
Write-Host "`nCreating theme directory structure..." -ForegroundColor Cyan
$ThemePath = "$BasePath/wp-content/themes/twentytwentyfive-child"
Create-FtpDirectory -RemotePath "$BasePath/wp-content" -FtpHost $FtpHost -FtpUser $FtpUser -FtpPass $FtpPass | Out-Null
Create-FtpDirectory -RemotePath "$BasePath/wp-content/themes" -FtpHost $FtpHost -FtpUser $FtpUser -FtpPass $FtpPass | Out-Null
Create-FtpDirectory -RemotePath $ThemePath -FtpHost $FtpHost -FtpUser $FtpUser -FtpPass $FtpPass | Out-Null

# Get all theme files (excluding root files)
$ThemeFiles = Get-ChildItem -Path $LocalPath -Recurse -File | Where-Object {
    $FileName = $_.Name
    $FileName -notin $RootFiles -and $FileName -ne $SecurityFile
}

# Create subdirectories for theme
$Directories = $ThemeFiles | ForEach-Object {
    if ($_.DirectoryName.Length -gt $LocalPath.Length) {
        $RelativePath = $_.DirectoryName.Substring($LocalPath.Length + 1)
        if ($RelativePath) {
            "$ThemePath/$RelativePath".Replace('\', '/')
        }
    }
} | Where-Object { $_ } | Select-Object -Unique

foreach ($Dir in $Directories) {
    if ($Dir) {
        Create-FtpDirectory -RemotePath $Dir -FtpHost $FtpHost -FtpUser $FtpUser -FtpPass $FtpPass | Out-Null
    }
}
Create-FtpDirectory -RemotePath "$ThemePath/assets" -FtpHost $FtpHost -FtpUser $FtpUser -FtpPass $FtpPass | Out-Null
Create-FtpDirectory -RemotePath "$ThemePath/assets/logos" -FtpHost $FtpHost -FtpUser $FtpUser -FtpPass $FtpPass | Out-Null

Write-Host "Directory structure created.`n" -ForegroundColor Green

# Upload theme files
Write-Host "Uploading THEME files..." -ForegroundColor Yellow
$ThemeUploaded = 0
$ThemeFailed = 0

foreach ($File in $ThemeFiles) {
    $RelativePath = $File.FullName.Substring($LocalPath.Length + 1)
    $RemoteFile = "$ThemePath/$RelativePath".Replace('\', '/')
    
    Write-Host "  Uploading: $RelativePath" -ForegroundColor Yellow
    if (Upload-File -LocalFile $File.FullName -RemoteFile $RemoteFile -FtpHost $FtpHost -FtpUser $FtpUser -FtpPass $FtpPass) {
        $ThemeUploaded++
        Write-Host "    [OK] Success" -ForegroundColor Green
    } else {
        $ThemeFailed++
        Write-Host "    [FAILED]" -ForegroundColor Red
    }
}

# Summary
Write-Host "`n" -NoNewline
Write-Host "=" * 60 -ForegroundColor Cyan
Write-Host "Upload Summary" -ForegroundColor Green
Write-Host "=" * 60 -ForegroundColor Cyan
Write-Host "Root files uploaded: $RootUploaded" -ForegroundColor $(if ($RootFailed -eq 0) { "Green" } else { "Yellow" })
if ($RootFailed -gt 0) {
    Write-Host "Root files failed: $RootFailed" -ForegroundColor Red
}
Write-Host "Legal PHP files uploaded: $LegalUploaded" -ForegroundColor $(if ($LegalFailed -eq 0) { "Green" } else { "Yellow" })
if ($LegalFailed -gt 0) {
    Write-Host "Legal PHP files failed: $LegalFailed" -ForegroundColor Red
}
Write-Host "Theme files uploaded: $ThemeUploaded" -ForegroundColor $(if ($ThemeFailed -eq 0) { "Green" } else { "Yellow" })
if ($ThemeFailed -gt 0) {
    Write-Host "Theme files failed: $ThemeFailed" -ForegroundColor Red
}
Write-Host "=" * 60 -ForegroundColor Cyan
Write-Host "`nFile Locations:" -ForegroundColor Cyan
Write-Host "  Root files: $BasePath/" -ForegroundColor White
Write-Host "  Legal PHP files: $BasePath/" -ForegroundColor White
Write-Host "  security.txt: $BasePath/.well-known/security.txt" -ForegroundColor White
Write-Host "  Theme files: $ThemePath/" -ForegroundColor White
Write-Host "`nUpload complete!" -ForegroundColor Green

