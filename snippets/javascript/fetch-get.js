// This statement is required only by Node.
const fetch = require("node-fetch");

fetch("http://example.com")
  .then(response => response.text())
  .then(text => console.log(text))
  .catch(error => console.error(error));