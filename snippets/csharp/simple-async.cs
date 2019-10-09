using System;
using System.Net.Http;
using System.Threading.Tasks;

class Program {

  static async Task Main(string[] args) {
    try	{
      using (var client = new HttpClient()) {
        var body = await client.GetStringAsync("http://www.example.com");
      }
    } catch(HttpRequestException e) {
      Console.WriteLine(e.Message);
    }
  }

}