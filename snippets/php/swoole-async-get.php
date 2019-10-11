use Swoole\Http\Client;

$client = new Client("www.example.com", 80);
$client->get("/", function ($client) {
  $content = $client->body;
});