import java.io.BufferedReader;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;
import java.util.Base64;

public class Program {

  public static void main(String[] args) throws Exception {

    URL url = new URL("http://example.com");
    String credentials = Base64.getEncoder()
                           .encodeToString(("my_username:my_password").getBytes("UTF-8"));

    HttpURLConnection c = (HttpURLConnection) url.openConnection();
    c.setRequestProperty("Authorization", "Basic " + credentials);

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