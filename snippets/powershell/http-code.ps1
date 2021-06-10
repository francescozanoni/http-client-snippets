$httpCode = (Invoke-WebRequest `
               -URI "http://example.com").StatusCode
