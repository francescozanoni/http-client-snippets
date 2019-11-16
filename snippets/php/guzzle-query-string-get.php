use GuzzleHttp\Client;

$client = new Client();
$response = $client->get(
  "http://example.com",
  [
    "query" => [
      "key1" => "value1",
      "key2" => ["value2_1", "value2_2"]
    ]
  ]
);
$content = $response->getBody()->__toString();