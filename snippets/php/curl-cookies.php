$c = curl_init();
curl_setopt($c, CURLOPT_URL, "http://example.com/login");
curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($c, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($c, CURLOPT_USERPWD, "my_username:my_password");
curl_setopt($c, CURLOPT_COOKIEJAR, "cookie.txt");
$response = curl_exec($c);
curl_close($c);

$c = curl_init();
curl_setopt($c, CURLOPT_URL, "http://example.com/home");
curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($c, CURLOPT_COOKIEFILE, "cookie.txt");
$response = curl_exec($c);
curl_close($c);