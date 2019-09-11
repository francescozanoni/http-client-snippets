$response = file_get_contents(
  "http://www.example.com",
  false,
  stream_context_create(["http" => ["ignore_errors" => true]])
);