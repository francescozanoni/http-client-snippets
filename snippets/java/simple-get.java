import java.io.BufferedReader;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;

public class Program {

  public static void main(String[] args) throws Exception {

    URL url = new URL("http://example.com");
    HttpURLConnection c = (HttpURLConnection) url.openConnection();

    InputStream inputStream = null;
    BufferedReader br = null;
    if (c.getResponseCode() == 200) {
      inputStream = c.getInputStream();
    } else {
      inputStream = c.getErrorStream();
    }
    br = new BufferedReader(new InputStreamReader(inputStream));

    String content = null;
    String temp = null;
    while ((temp = br.readLine()) != null) {
      content += temp;
    }

    c.disconnect();

  }

}