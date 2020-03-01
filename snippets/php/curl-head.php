$c = curl_init();
curl_setopt($c, CURLOPT_URL, "http://example.com");
curl_setopt($c, CURLOPT_NOBODY, true);
curl_exec($c);
curl_close($c);