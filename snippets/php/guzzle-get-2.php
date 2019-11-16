use GuzzleHttp\Client;

$client = new Client(["base_uri" => "http://example.com"]);
$response = $client->request("GET", "/");
$content = $response->getBody()->__toString();