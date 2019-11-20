using System;
using System.Net;
using System.IO;

class Program {

  static void Main() {

    try {

      HttpWebRequest request = null;
      HttpWebResponse response = null;

      request = (HttpWebRequest)WebRequest.Create("http://example.com");

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

}