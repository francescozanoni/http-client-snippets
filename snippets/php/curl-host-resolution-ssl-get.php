$c = curl_init();
curl_setopt($c, CURLOPT_URL, "https://93.184.216.34");
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
curl_setopt($c, CURLOPT_HTTPHEADER, [
  "Host: example.com",
]);
curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);
$response = curl_exec($c);
curl_close($c);