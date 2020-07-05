$c = curl_init();
curl_setopt_array(
  $c,
  [
    CURLOPT_URL => "http://example.com",
    CURLOPT_USERPWD => "my_username:my_password",
    CURLOPT_RETURNTRANSFER => true
  ]
);
$response = curl_exec($c);
curl_close($c);