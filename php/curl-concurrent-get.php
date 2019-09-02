$urls = [

];

// URLs successfully requested are removed from list,
// while failing ones are re-tried
while (count($urls) > 0) {

    $curls = [];

    // build the multi-curl handle, adding all $curls
    $m = curl_multi_init();
    foreach ($urls as $url) {
        $curls[$url] = curl_init($url);
        curl_setopt($curls[$url], CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curls[$url], CURLOPT_CONNECTTIMEOUT, 1); 
        curl_multi_add_handle($m, $curls[$url]);
    }
  
    // execute all queries simultaneously, and continue when all are complete
    $running = null;
    do {
        curl_multi_exec($m, $running);
    } while ($running);

    // all of our requests are done or failed, we can now access the results
    foreach ($urls as $url) {
        $content = curl_multi_getcontent($curls[$url]);
        curl_multi_remove_handle($m, $curls[$url]);
        curl_close($curls[$url]);
        // if request is successful, file is created and its URL is removed from URL list
        if (strlen($content) > 0) {
           // do something with $content
            unset($urls[array_search($url, $urls)]);
        }
    }

    curl_multi_close($m);

}