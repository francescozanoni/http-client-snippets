$payload = http_build_query(["key1" => "value1", "key2" => "value2"]);

$c = curl_init();
curl_setopt($c, CURLOPT_URL,"http://www.example.com");
curl_setopt($c, CURLOPT_POST, 1);
curl_setopt($c, CURLOPT_POSTFIELDS, $payload);
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($c);
curl_close($c);