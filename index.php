<?php

require __DIR__ . '/vendor/autoload.php';

$client  = new GuzzleHttp\Client();

try {
    $response = $client->request('GET',
        'https://api.github.com/repos/guzzle/guzzle', [
            "headers" => [
                "Authorization" => "Bearer 1234567890abcdef",
                "User-Agent" => "guzzle/guzzle",
            ],
        ]);

    echo $response->getStatusCode(), "\n"; // 200
    echo $response->getHeaderLine('content-type'), "\n"; // 'application/json; charset=utf8'
    echo $response->getBody(), "\n"; // '{"id": 1420053, "name": "guzzle", ...}'

} catch (\GuzzleHttp\Exception\GuzzleException $e) {

    echo $e->getMessage();
}

