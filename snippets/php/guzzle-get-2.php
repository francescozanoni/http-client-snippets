use GuzzleHttp\Client;

$client = new Client(["base_uri" => "http://www.example.com"]);
$response = $client->request("GET", "/");
$content = $response->getBody()->__toString();