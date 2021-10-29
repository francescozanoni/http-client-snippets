$response = try {
    (Invoke-WebRequest `
    -URI "http://example.com" `
    -ErrorAction Stop).Content
} catch [System.Net.WebException] {
    $stream = $_.Exception.Response.GetResponseStream()
    $reader = New-Object System.IO.StreamReader($stream)
    $reader.BaseStream.Position = 0
    $reader.DiscardBufferedData()
    $reader.ReadToEnd();
}
