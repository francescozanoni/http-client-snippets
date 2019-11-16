use GuzzleHttp\Client;

$client = new Client(["base_uri" => "http://example.com"]);
$response = $client->request(
  "GET",
  "/",
  ["auth" => ["my_username", "my_password"]]
);
$content = $response->getBody()->__toString();