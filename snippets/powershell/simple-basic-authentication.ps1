$username = "my_username"
$password = "my_password"
$encodedCredentials = [Convert]::ToBase64String( `
  [System.Text.Encoding]::UTF8.GetBytes("$($username):$($password)") `
)

$response = (
  Invoke-WebRequest `
    -Headers @{ Authorization = "Basic $encodedCredentials" } `
    -URI "http://example.com"
).Content
