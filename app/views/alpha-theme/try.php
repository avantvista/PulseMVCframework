<?php
// Use a class from a third-party package (e.g., Guzzle for HTTP requests)
use GuzzleHttp\Client;

// Create an instance of Guzzle HTTP client
$client = new Client();

// Perform an HTTP GET request
$response = $client->request('GET', 'https://api.github.com');

// Print the response status code
echo "HTTP status code: " . $response->getStatusCode();