$c = curl_init();
curl_setopt($c, CURLOPT_URL,"http://www.example.com");
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
curl_setopt($c, CURLOPT_HTTPHEADER, [
    "X-Custom-1: value 1",
    "X-Custom-2: value 2",
]);
$response = curl_exec($c);
curl_close($c);