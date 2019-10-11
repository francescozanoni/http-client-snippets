$client = new Swoole\Http\Client("www.example.com", 80);

$client->get("/", function ($client) {
  $content = $client->body;
});