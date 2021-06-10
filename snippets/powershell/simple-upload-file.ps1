(Invoke-WebRequest `
   -Headers @{ "Content-Type" = "application/zip" } `
   -URI "http://example.com" `
   -Method Post `
   -InFile file.zip).Content
