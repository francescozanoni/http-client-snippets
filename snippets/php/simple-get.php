$options = ["http" => ["ignore_errors" => true]];

$response = file_get_contents(
  "http://www.example.com",
  false,
  stream_context_create($options)
);