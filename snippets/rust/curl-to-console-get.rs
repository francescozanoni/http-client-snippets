use curl::easy::Easy;
use std::io::{stdout, Write};

fn main() {
  let mut easy = Easy::new();
  easy.url("http://example.com").unwrap();
  easy.write_function(|data| {
    Ok(stdout().write(data).unwrap())
  }).unwrap();
  easy.perform().unwrap();
}
