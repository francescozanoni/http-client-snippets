$options = [
  "ssl" => [
    "verify_peer" => false,
    "verify_peer_name" => false
  ]
];

$response = file_get_contents(
  "https://example.com",
  false,
  stream_context_create($options)
);