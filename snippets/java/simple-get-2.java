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
               .build();

    request = HttpRequest
                .newBuilder()
                .uri(URI.create("http://example.com"))
                .build();

    response = client.send(request, BodyHandlers.ofString());

    String content = response.body();

  }

}
