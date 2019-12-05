const axios = require("axios");

axios.get("http://example.com", {
    headers: {
      "X-Custom-1": "value 1",
      "X-Custom-2": "value 2"
    }
  })
  .then(function (response) {

  })
  .catch(function (error) {

  })
  .finally(function () {

  });