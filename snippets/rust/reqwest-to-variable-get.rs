use reqwest::blocking::Client;

fn main() {
  let client = Client::new();
  let response = client.get("http://example.com")
    .send()
    .unwrap()
    .text()
    .unwrap();
}