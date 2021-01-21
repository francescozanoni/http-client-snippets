(Invoke-WebRequest -Headers @{ "X-Custom-1" = "value 1"; "X-Custom-2" = "value 2" } `
                   -URI "http://example.com").Content
