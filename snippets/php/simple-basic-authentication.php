$options = [
  "http" => [
    "header"  => "Authorization: Basic " . base64_encode("my_username:my_password"),
    "ignore_errors" => true,
  ]
];

$response = file_get_contents(
  "http://www.example.com",
  false,
  stream_context_create($options)
);