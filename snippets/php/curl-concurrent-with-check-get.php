$urls = [
  "http://www.example.com",
  "http://www.example.net",
  "http://www.example.org",
];

// URLs successfully requested are removed from list,
// while failing ones are re-tried
while (count($urls) > 0) {

  $curls = [];

  // Build the multi-curl handle, adding all $curls
  $m = curl_multi_init();
  foreach ($urls as $url) {
    $curls[$url] = curl_init($url);
    curl_setopt($curls[$url], CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curls[$url], CURLOPT_CONNECTTIMEOUT, 1); 
    curl_multi_add_handle($m, $curls[$url]);
  }
  
  // Execute all requests simultaneously
  // and continue once all are complete
  $running = null;
  do {
    curl_multi_exec($m, $running);
  } while ($running);

  // All requests are done or failed, we can access results
  foreach ($urls as $url) {
    $response = curl_multi_getcontent($curls[$url]);
    curl_multi_remove_handle($m, $curls[$url]);
    curl_close($curls[$url]);
    // If request is successful,
    // its URL is removed from URL list
    if (strlen($content) > 0) {
      unset($urls[array_search($url, $urls)]);
    }
  }

  curl_multi_close($m);

}
