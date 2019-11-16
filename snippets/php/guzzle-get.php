use GuzzleHttp\Client;

$client = new Client();
$response = $client->get("http://example.com");
$content = $response->getBody()->__toString();