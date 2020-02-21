use curl::easy::{Easy2, Handler, WriteError, Auth};
use std::str;

fn main() {

  struct Collector(String);
  impl Handler for Collector {
    fn write(&mut self, data: &[u8]) -> Result<usize, WriteError> {
      self.0.push_str(str::from_utf8(&data).unwrap());
      Ok(data.len())
    }
  }

  let mut easy = Easy2::new(Collector(String::new()));
  easy.get(true).unwrap();
  easy.url("http://example.com").unwrap();
  easy.http_auth(Auth::new().basic(true)).unwrap();
  easy.username("my_username").unwrap();
  easy.password("my_password").unwrap();
  easy.perform().unwrap();

  let response = &easy.get_ref().0;

}