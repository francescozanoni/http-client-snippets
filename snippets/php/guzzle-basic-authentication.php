use GuzzleHttp\Client;

$client = new Client(["base_uri" => "http://www.example.com"]);
$response = $client->request(
  "GET",
  "/",
  ["auth" => ["my_username", "my_password"]]
);
$content = $response->getBody()->__toString();