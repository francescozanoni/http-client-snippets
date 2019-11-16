use Swoole\Http\Client;

$client = new Client("example.com", 80);
$client->get("/", function ($client) {
  $content = $client->body;
});