import java.io.BufferedReader;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;

public class Program {

  public static void main(String[] args) {

    try {

      URL url = new URL("http://www.example.com");
      HttpURLConnection connection = (HttpURLConnection) url.openConnection();

      // Request is performed and response retrieved
      InputStream inputStream = null;
      BufferedReader br = null;
      if (connection.getResponseCode() == 200) {
        inputStream = connection.getInputStream();
      } else {
        inputStream = connection.getErrorStream();
      }
      br = new BufferedReader(new InputStreamReader(inputStream));

      // Response content is displayed
      String content = null;
      String temp = null;
      while ((temp = br.readLine()) != null) {
        content += temp;
      }

      connection.disconnect();

    } catch (Exception e) {

    }

  }

}