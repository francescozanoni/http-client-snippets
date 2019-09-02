use GuzzleHttp\Pool;
use GuzzleHttp\Client;

$urls = [
  "http://www.example.com",
  "http://www.example.net",
  "http://www.example.org",
];

$client = new Client();

$requests = function ($client) use ($urls) {
  foreach($urls as $url) {
    yield function() use ($client, $url) {
      return $client->getAsync(
        $url,
        ["sink" => parse_url($url)["host"] . ".html"]
      );
    };
  }
};

$pool = new Pool($client, $requests($client));

// Initiate the transfers and create a promise,
// then force the pool of requests to complete.
$pool->promise()->wait();