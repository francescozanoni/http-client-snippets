$c = curl_init();
curl_setopt($c, CURLOPT_URL, "https://example.com");
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($c, CURLOPT_SSL_VERIFYPEER, 0);
$response = curl_exec($c);
curl_close($c);