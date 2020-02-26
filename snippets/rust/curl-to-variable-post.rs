use curl::easy::{Easy2, Handler, WriteError};
use std::str;

fn main() {

  struct Collector(String);
  impl Handler for Collector {
    fn write(&mut self, data: &[u8]) -> Result<usize, WriteError> {
      self.0.push_str(str::from_utf8(&data).unwrap());
      Ok(data.len())
    }
  }

  let payload = "key1=value1&key2=value2".as_bytes();

  let mut easy = Easy2::new(Collector(String::new()));
  easy.post(true).unwrap();
  easy.url("http://example.com").unwrap();
  easy.post_fields_copy(payload).unwrap();
  easy.perform().unwrap();

  let response = &easy.get_ref().0;

}
