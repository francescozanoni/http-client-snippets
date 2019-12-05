const axios = require("axios");
 
axios.all([
    axios.get("http://example.com")
      .then(function (response) { /* ... */ })
      .catch(function (error) { /* ... */ })
      .finally(function () { /* ... */ }),
    axios.get("http://example.net")
      .then(function (response) { /* ... */ })
      .catch(function (error) { /* ... */ })
      .finally(function () { /* ... */ }),
    axios.get("http://example.org")
      .then(function (response) { /* ... */ })
      .catch(function (error) { /* ... */ })
      .finally(function () { /* ... */ })
  ])
  .then(axios.spread(function (com, net, org) {
    // All requests are now complete
  }));