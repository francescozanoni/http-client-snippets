const axios = require("axios");

axios.get("http://example.com", {
    auth: {
      "username": "my_username",
      "password": "my_password"
    }
  })
  .then(function (response) {

  })
  .catch(function (error) {

  })
  .finally(function () {

  });