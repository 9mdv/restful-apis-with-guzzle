<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$response = $client->request(
    'GET',
    'https://jsonplaceholder.typicode.com/posts/1'
);

var_dump($response);

echo $response->getStatusCode() . "\r\n";
echo $response->getReasonPhrase() . "\r\n";

$response = $response->withStatus(418);

echo $response->getStatusCode() . "\r\n";
echo $response->getReasonPhrase() . "\r\n";

$response = $response->withStatus(419, 'Sake is better than tea 🍶');

echo $response->getStatusCode() . "\r\n";
echo $response->getReasonPhrase() . "\r\n";
