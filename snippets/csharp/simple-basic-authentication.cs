using System;
using System.Net;
using System.IO;
using System.Text;

class Program {

  static void Main() {

    try {

      HttpWebRequest request = null;
      HttpWebResponse response = null;

      string encodedCredentials = EncodeString("my_username:my_password");

      request = (HttpWebRequest)WebRequest.Create("http://example.com");
      request.Headers.Add("Authorization", "Basic " + encodedCredentials);

      try {
        response = (HttpWebResponse)request.GetResponse();
      } catch (WebException ex) {
        response = (HttpWebResponse)ex.Response;
      }

      Stream responseStream = response.GetResponseStream();
      StreamReader reader = new StreamReader(responseStream);
      string body = reader.ReadToEnd();
      reader.Close();
      responseStream.Close();

    } catch (Exception ex) {
      // Custom error handling
    }

  }

  static string EncodeString(string input) {

    byte[] data = Encoding.GetEncoding("ISO-8859-1").GetBytes(input);
    string output = Convert.ToBase64String(data);

    return output;

  }

}