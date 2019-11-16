#include <stdio.h>
#include <curl/curl.h>

int main()
{
  CURL *curl;
  CURLcode result;

  curl_global_init(CURL_GLOBAL_ALL);

  curl = curl_easy_init();
  
  if(curl) {
    curl_easy_setopt(curl, CURLOPT_URL, "http://example.com");
    result = curl_easy_perform(curl);
    if(result != CURLE_OK) {
      printf("%s\n", curl_easy_strerror(result));
    }
    curl_easy_cleanup(curl);
  }

  curl_global_cleanup();
  
  return 0;
}