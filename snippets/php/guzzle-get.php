use GuzzleHttp\Client;

$client = new Client();
$response = $client->get("http://www.example.com");
$content = $response->getBody()->__toString();