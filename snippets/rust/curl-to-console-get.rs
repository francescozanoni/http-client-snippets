use curl::easy::Easy;
use std::io::{stdout, Write};

fn main() {

  let mut client = Easy::new();

  client.url("http://example.com").unwrap();
  client.write_function(|data| {
    Ok(stdout().write(data).unwrap())
  }).unwrap();
  client.perform().unwrap();
}
