# Quick upload script for test files
param(
    [string]$FtpHost = "linux101.unoeuro.com",
    [string]$FtpUser = "nordicleads.dk",
    [string]$FtpPass = "",
    [string]$BasePath = "/public_html"
)

if ([string]::IsNullOrEmpty($FtpPass)) {
    $SecurePass = Read-Host "Enter FTP Password" -AsSecureString
    $BSTR = [System.Runtime.InteropServices.Marshal]::SecureStringToBSTR($SecurePass)
    $FtpPass = [System.Runtime.InteropServices.Marshal]::PtrToStringAuto($BSTR)
}

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
        
        Write-Host "  [OK] $LocalFile" -ForegroundColor Green
        return $true
    }
    catch {
        Write-Host "  [FAILED] $LocalFile : $_" -ForegroundColor Red
        return $false
    }
}

Write-Host "`nUploading test files..." -ForegroundColor Yellow

Upload-File -LocalFile "create-case-studies-v2.php" -RemoteFile "$BasePath/create-case-studies-v2.php" -FtpHost $FtpHost -FtpUser $FtpUser -FtpPass $FtpPass
Upload-File -LocalFile "test-wp-load.php" -RemoteFile "$BasePath/test-wp-load.php" -FtpHost $FtpHost -FtpUser $FtpUser -FtpPass $FtpPass

Write-Host "`nDone! Test: https://nordicleads.dk/test-wp-load.php" -ForegroundColor Green

