#include <stdio.h>
#include <curl/curl.h>

int main(void)
{
  CURL *curl;
  CURLcode result;

  curl = curl_easy_init();
  
  if(curl) {
    curl_easy_setopt(curl, CURLOPT_URL, "http://www.example.com");
    result = curl_easy_perform(curl);
    if(result != CURLE_OK) {
      printf("%s\n", curl_easy_strerror(result));
    }
    curl_easy_cleanup(curl);
  }
  
  return 0;
}