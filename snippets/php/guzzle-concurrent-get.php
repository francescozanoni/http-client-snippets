use GuzzleHttp\Pool;
use GuzzleHttp\Client;

$urls = [
  "http://www.example.com",
  "http://www.example.net",
  "http://www.example.org",
];

$client = new Client();

$requests = function ($client) use ($urls) {
  foreach($urls as $i => $url) {
    yield function() use ($client, $i, $url) {
      return $client->getAsync(
        $url,
        ["sink" => $i . ".html"]
      );
    };
  }
};

$pool = new Pool($client, $requests($client));

// Initiate the transfers and create a promise,
// then force the pool of requests to complete.
$pool->promise()->wait();