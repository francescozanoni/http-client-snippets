$c = curl_init();
curl_setopt($c, CURLOPT_URL, "http://93.184.216.34");
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
curl_setopt($c, CURLOPT_HTTPHEADER, [
  "Host: example.com",
]);
$response = curl_exec($c);
curl_close($c);