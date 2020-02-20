use curl::easy::Easy;
use std::str;

fn main() {

  let mut response = String::new();
  let mut client = Easy::new();

  client.url("http://example.com").unwrap();
  {
    let mut transfer = client.transfer();
    transfer.write_function(|data| {
      response.push_str(str::from_utf8(&data).unwrap());
      Ok(data.len())
    }).unwrap();
    transfer.perform().unwrap();
  }

}