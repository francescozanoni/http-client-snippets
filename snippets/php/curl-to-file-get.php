$fp = fopen (__DIR__ . "/file.html", "w+");

$c = curl_init();
curl_setopt($c, CURLOPT_URL, "http://example.com");
curl_setopt($c, CURLOPT_FILE, $fp);
curl_exec($c);
curl_close($c);

fclose($fp);