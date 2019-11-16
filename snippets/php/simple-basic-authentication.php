$encodedCredentials = base64_encode("my_username:my_password");

$options = [
  "http" => [
    "header"  => "Authorization: Basic " . $encodedCredentials,
    "ignore_errors" => true,
  ]
];

$response = file_get_contents(
  "http://example.com",
  false,
  stream_context_create($options)
);