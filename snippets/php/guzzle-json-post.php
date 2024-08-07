use GuzzleHttp\Client;

$client = new Client();
$response = $client->post(
  "http://example.com",
  [
    GuzzleHttp\RequestOptions::JSON => [
      "key1" => "value1",
      "key2" => "value2"
    ]
  ]
);
$content = $response->getBody()->__toString();