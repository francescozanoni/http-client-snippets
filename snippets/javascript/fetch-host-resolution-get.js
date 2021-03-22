// This statement is required only by Node.
const fetch = require("node-fetch");

fetch("http://93.184.216.34", {
    headers: {
      "Host": "example.com"
    }
  })
  .then(response => response.text())
  .then(text => console.log(text))
  .catch(error => console.error(error));