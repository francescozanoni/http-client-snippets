const axios = require("axios");

axios.get(
  "http://example.com",
  {
    validateStatus: function (status) {
      return status === status;
    }
  }
)
  .then(function (response) {

  })
  .catch(function (error) {

  })
  .finally(function () {

  });