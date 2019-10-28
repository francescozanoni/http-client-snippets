using System;
using System.Net;
using System.IO;

class Program {

  static void Main() {

    try {

      HttpWebRequest request = (HttpWebRequest)WebRequest.Create("http://www.example.com");
      
      string credentials = "my_username:my_password";
      byte[] binaryCredentials = System.Text.Encoding.UTF8.GetBytes(credentials);
      credentials = "Basic " + Convert.ToBase64String(binaryCredentials);
      request.Headers.Add("AUTHORIZATION", credentials);

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