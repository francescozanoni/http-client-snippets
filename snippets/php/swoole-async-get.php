$cli = new Swoole\Http\Client('www.example.com', 80);

$cli->get('/', function ($cli) {
    $content = $cli->body;
});