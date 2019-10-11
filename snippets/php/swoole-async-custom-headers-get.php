use Swoole\Http\Client;

$client = new Client("www.example.com", 80);
$client->setHeaders([
  "X-Custom-1" => "value 1",
  "X-Custom-2" => "value 2",
]);
$client->get("/", function ($client) {
  $content = $client->body;
});