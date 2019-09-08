// Distinguish success and failure.
$.get("http://www.example.com")
  .done(function(data) {
    // do something with data...
  })
  .fail(function(data) {
    // do something with data...
  });

// Handle success and failure together.
$.get("http://www.example.com")
  .always(function(data) {
    // do something with data...
  });