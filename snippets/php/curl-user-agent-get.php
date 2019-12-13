$c = curl_init();
curl_setopt($c, CURLOPT_URL, "http://example.com");
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
curl_setopt($c, CURLOPT_USERAGENT, 'My User Agent');
$response = curl_exec($c);
curl_close($c);