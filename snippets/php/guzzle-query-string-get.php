use GuzzleHttp\Client;

$client = new Client();
$response = $client->get(
  "http://www.example.com",
  [
    "query" => [
      "key1" => "value1",
      "key2" => "value2"
    ]
  ]
);
$content = $response->getBody()->__toString();