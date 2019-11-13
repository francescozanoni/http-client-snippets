$c = curl_init();
curl_setopt($c, CURLOPT_URL, "http://www.example.com");
curl_setopt($c, CURLOPT_USERPWD, "my_username:my_password");
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($c);
curl_close($c);