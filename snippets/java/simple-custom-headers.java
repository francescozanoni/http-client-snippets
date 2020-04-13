import java.net.URI;
import java.net.http.HttpClient;
import java.net.http.HttpRequest;
import java.net.http.HttpResponse;
import java.net.http.HttpResponse.BodyHandlers;

public class Program {

  public static void main(String[] args) throws Exception {

    HttpClient client;
    HttpRequest request;
    HttpResponse<String> response;

    client = HttpClient
               .newBuilder()
               .version(HttpClient.Version.HTTP_1_1)
               .build();

    request = HttpRequest
                .newBuilder()
                .uri(URI.create("http://example.com"))
                .setHeader("X-Custom-1", "value 1")
                .setHeader("X-Custom-2", "value 2")
                .build();

    response = client.send(request, BodyHandlers.ofString());

    String content = response.body();

  }

}
