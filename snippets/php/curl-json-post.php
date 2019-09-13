$payload = json_encode([
  "key1" => "value1",
  "key2" => "value2"
]);

$c = curl_init();
curl_setopt($c, CURLOPT_URL,"http://www.example.com");
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
curl_setopt($c, CURLINFO_HEADER_OUT, true);
curl_setopt($c, CURLOPT_POST, true);
curl_setopt($c, CURLOPT_POSTFIELDS, $payload);
curl_setopt($c, CURLOPT_HTTPHEADER, [
  "Content-Type: application/json",
  "Content-Length: " . strlen($payload))
];
$response = curl_exec($c);
curl_close($c);