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

  static string EncodeString(string inputDataString) {

    byte[] dataBinary = Encoding.GetEncoding("ISO-8859-1").GetBytes(inputDataString);
    string outputDataString = Convert.ToBase64String(dataBinary);

    return outputDataString;

  }

}