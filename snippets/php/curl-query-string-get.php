$query = http_build_query([
  "key1" => "value1",
  "key2" => ["value2_1", "value2_2"]
]);

$c = curl_init();
curl_setopt($c, CURLOPT_URL, "http://example.com?" . $query);
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($c);
curl_close($c);