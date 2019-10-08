using System;
using System.Net.Http;
using System.Threading.Tasks;

namespace example
{
    class Program
    {
        
        static async Task Main(string[] args)
        {
            var body  = await getHtml("https://google.com");

            Console.WriteLine(body);
        }

        public async static Task<string> getHtml(string url) {

            try	
            {
               using (var client = new HttpClient())
                {
                    return await client.GetStringAsync(url);
                }
            }  
            catch(HttpRequestException e)
            {
                Console.WriteLine("\nException Caught!");	
                Console.WriteLine("Message :{0} ",e.Message);

                throw e; 
            }         
        }
    }
}


// install dotnet core https://dotnet.microsoft.com/download
// dotnet new console -n http_client
