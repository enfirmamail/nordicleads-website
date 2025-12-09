# PowerShell script to create Services pages
# This script runs the create-services-pages.php file

Write-Host "Creating Services pages in WordPress..." -ForegroundColor Green
Write-Host ""

# Check if we're in the right directory
if (-not (Test-Path "create-services-pages.php")) {
    Write-Host "Error: create-services-pages.php not found!" -ForegroundColor Red
    Write-Host "Please run this script from the project root directory." -ForegroundColor Red
    exit 1
}

# Run the PHP script
try {
    Write-Host "Running create-services-pages.php..." -ForegroundColor Yellow
    php create-services-pages.php
    
    Write-Host ""
    Write-Host "✅ Services pages created successfully!" -ForegroundColor Green
    Write-Host ""
    Write-Host "You can now:" -ForegroundColor Cyan
    Write-Host "  1. Visit your website to see the new Services dropdown menu" -ForegroundColor White
    Write-Host "  2. Go to WordPress Admin → Pages to edit the service pages" -ForegroundColor White
    Write-Host "  3. Add content to each service page" -ForegroundColor White
    Write-Host ""
}
catch {
    Write-Host "Error running PHP script: $_" -ForegroundColor Red
    exit 1
}

