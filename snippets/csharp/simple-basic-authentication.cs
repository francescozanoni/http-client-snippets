using System;
using System.Net;
using System.IO;
using System.Text;

class Program {

  static void Main() {

    try {

      HttpWebRequest request = (HttpWebRequest)WebRequest.Create("http://www.example.com");
      
      string credentials = "my_username:my_password";
      byte[] binaryCredentials = Encoding.GetEncoding("ISO-8859-1").GetBytes(credentials);
      string encodedCredentials = Convert.ToBase64String(binaryCredentials);
      request.Headers.Add("Authorization", "Basic " + encodedCredentials);

      HttpWebResponse response = null;
      try {
        response = (HttpWebResponse)request.GetResponse();
      } catch (WebException ex) {
        response = (HttpWebResponse)ex.Response;
      }

      StreamReader reader = new StreamReader(response.GetResponseStream());
      string body = reader.ReadToEnd();
      reader.Close();

    } catch (Exception ex) {
      // Custom error handling
    }

  }

}