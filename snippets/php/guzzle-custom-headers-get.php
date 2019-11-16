use GuzzleHttp\Client;

$client = new Client(["base_uri" => "http://example.com"]);
$response = $client->request(
  "GET",
  "/",
  [
    "headers" => [
      "X-Custom-1" => "value 1",
      "X-Custom-2" => ["value 2", "value 3"]
    ]
  ]
);
$content = $response->getBody()->__toString();