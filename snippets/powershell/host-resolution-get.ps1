(Invoke-WebRequest `
   -Headers @{ Host = "example.com" } `
   -URI "http://93.184.216.34").Content
