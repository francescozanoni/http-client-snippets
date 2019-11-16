$.ajax({
  url: "http://example.com",
  beforeSend: function (xhr) {
    xhr.setRequestHeader(
      "Authorization",
      "Basic " + btoa("my_username:my_password")
    );
  }
})
  .done(function (data, textStatus, jqXHR) {

  })
  .fail(function (jqXHR, textStatus, error) {

  });