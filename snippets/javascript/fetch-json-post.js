// This statement is required only by Node.
const fetch = require("node-fetch");

const payload = JSON.stringify({
  key1: "value1",
  key2: "value2"
});

fetch(
  "http://example.com",
  {
    method: "post",
    body: payload,
    headers: {"Content-Type": "application/json"},
  }
)
  .then(response => response.text())
  .then(text => console.log(text))
  .catch(error => console.error(error));