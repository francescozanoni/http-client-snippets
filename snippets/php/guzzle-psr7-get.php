use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

$client = new Client();
$request = new Request("GET", "http://www.example.com");
$response = $client->send($request);
$content = $response->getBody()->__toString();