$c = curl_init();
curl_setopt($c, CURLOPT_URL, "http://example.com");
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($c);
$httpCode = curl_getinfo($c, CURLINFO_HTTP_CODE);
curl_close($c);