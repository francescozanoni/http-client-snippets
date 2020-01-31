use GuzzleHttp\Client;

$client = new Client(["base_uri" => "http://93.184.216.34"]);
$response = $client->request(
  "GET",
  "/",
  ["headers" => ["Host" => "example.com"]]
);
$content = $response->getBody()->__toString();