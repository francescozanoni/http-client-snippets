$client = new Swoole\Http\Client("www.example.com", 80);
$client->setHeaders([
  "headers" => [
    "X-Custom-1" => "value 1",
    "X-Custom-2" => "value 2",
  ]
]);
$client->get("/", function ($client) {
  $content = $client->body;
});