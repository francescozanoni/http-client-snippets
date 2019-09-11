const http = require("http");

const options = {
  hostname: "www.example.com",
  path: "/",
  method: "GET"
};

const request = http.request(options, function (response) {
  var responseData = "";
  response.on("data", function (dataChunk) {
    responseData += dataChunk;
  });
  response.on("end", function () {
    // do something with responseData...
  });
})
  .on("error", function (error) {
    // handle error
  });

request.end();