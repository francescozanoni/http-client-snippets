import java.net.URI;
import java.net.http.HttpClient;
import java.net.http.HttpRequest;
import java.net.http.HttpRequest.BodyPublisher;
import java.net.http.HttpRequest.BodyPublishers;
import java.net.http.HttpResponse;
import java.net.http.HttpResponse.BodyHandlers;

public class Program {

  public static void main(String[] args) throws Exception {

    HttpClient client;
    HttpRequest request;
    HttpResponse<String> response;

    BodyPublisher payload = BodyPublishers
                              .ofString("key1=value1&key2=value2");

    client = HttpClient
               .newBuilder()
               .version(HttpClient.Version.HTTP_1_1)
               .build();

    request = HttpRequest
                .newBuilder()
                .POST(payload)
                .uri(URI.create("http://example.com"))
                .header("Content-Type", "application/x-www-form-urlencoded")
                .build();

    response = client.send(request, BodyHandlers.ofString());

    String content = response.body();

  }

}
