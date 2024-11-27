# Define the project path
$projectPath = "D:\CODING\Laravel\laravel-auth-app"

# Get all .html files in the directory and subdirectories
Get-ChildItem -Path $projectPath -Recurse -Filter "*.html" | ForEach-Object {
    # Get the full path and new name
    $oldFilePath = $_.FullName
    $newFilePath = $oldFilePath -replace "\.html$", ".blade.php"
    
    # Rename the file
    Rename-Item -Path $oldFilePath -NewName $newFilePath -Force
    Write-Host "Renamed: $oldFilePath -> $newFilePath"
}

Write-Host "All .html files have been renamed to .blade.php."
