use GuzzleHttp\Client;

$client = new Client(["base_uri" => "http://example.com"]);
$response = $client->request(
  "GET",
  "/",
  ["headers" => ["User-Agent" => "My User Agent"]]
);
$content = $response->getBody()->__toString();