$payload = http_build_query([
  "key1" => "value1",
  "key2" => "value2"
]);

$options = [
  "http" => [
    "method" => "POST",
    "header" => "Content-type: application/x-www-form-urlencoded",
    "content" => $payload,
    "ignore_errors" => true,
  ]
];

$response = file_get_contents(
  "http://www.example.com",
  false,
  stream_context_create($options)
);