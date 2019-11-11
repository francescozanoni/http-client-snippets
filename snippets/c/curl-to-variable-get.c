#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <curl/curl.h>
 
struct ChunkContainer {
  char *content;
  size_t size;
};

static size_t WriteStringCallback(void *buffer, size_t size, size_t nmemb, void *userPtr) {
  
  size_t realSize = size * nmemb;
  struct ChunkContainer *chunk = (struct ChunkContainer *)userPtr;
 
  chunk->content = realloc(chunk->content, chunk->size + realSize + 1);
  if(chunk->content == NULL) {
    printf("not enough memory (realloc returned NULL)\n");
    return 0;
  }

  memcpy(&(chunk->content[chunk->size]), buffer, realSize);
  chunk->size += realSize;
  chunk->content[chunk->size] = 0;
 
  return realSize;
  
}
 
int main(void) {
  
  CURL *curl;
  CURLcode result;
 
  struct ChunkContainer chunk;
 
  chunk.content = malloc(1);
  chunk.size = 0;
 
  curl_global_init(CURL_GLOBAL_ALL);
 
  curl = curl_easy_init();
  curl_easy_setopt(curl, CURLOPT_URL, "http://www.example.com");
  curl_easy_setopt(curl, CURLOPT_WRITEFUNCTION, WriteStringCallback);
  curl_easy_setopt(curl, CURLOPT_WRITEDATA, (void *)&chunk);
  result = curl_easy_perform(curl);
 
  /* check for errors */ 
  if(result != CURLE_OK) {
    printf("%s\n", curl_easy_strerror(result));
  } else {
    printf("%s\n", chunk.content);
  }
 
  curl_easy_cleanup(curl);
  free(chunk.content);
  curl_global_cleanup();
 
  return 0;
  
}