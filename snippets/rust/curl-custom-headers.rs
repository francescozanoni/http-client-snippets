use curl::easy::{Easy2, Handler, WriteError, List};
use std::str;

fn main() {

  struct Collector(String);
  impl Handler for Collector {
    fn write(&mut self, data: &[u8]) -> Result<usize, WriteError> {
      self.0.push_str(str::from_utf8(&data).unwrap());
      Ok(data.len())
    }
  }

  let mut headers = List::new();
  headers.append("X-Custom-1: value 1").unwrap();
  headers.append("X-Custom-2: value 2").unwrap();

  let mut client = Easy2::new(Collector(String::new()));
  client.get(true).unwrap();
  client.url("http://example.com").unwrap();
  client.http_headers(headers).unwrap();
  client.perform().unwrap();

  let response = &client.get_ref().0;

}