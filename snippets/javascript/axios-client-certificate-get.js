const fs = require("fs");
const https = require("https");
const axios = require("axios");

const httpsAgent = new https.Agent({
  cert: fs.readFileSync("path/to/cert.pem"),
  key: fs.readFileSync("path/to/key.pem")
})

axios.get(
  "http://example.com",
  { httpsAgent: httpsAgent }
)
  .then(function (response) {

  })
  .catch(function (error) {

  })
  .finally(function () {

  });