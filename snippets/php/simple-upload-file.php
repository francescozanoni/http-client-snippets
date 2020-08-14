$options = [
  "http" => [
    "method" => "POST",
    "header" => "Content-type: application/zip",
    "content" => file_get_contents("file.zip"),
    "ignore_errors" => true,
  ]
];

$response = file_get_contents(
  "http://example.com",
  false,
  stream_context_create($options)
);
