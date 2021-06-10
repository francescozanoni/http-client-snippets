(Invoke-WebRequest `
   -URI "http://example.com" `
   -Method Post `
   -Body (@{key1='value1';key2='value2'}|ConvertTo-Json) `
   -ContentType "application/json").Content
