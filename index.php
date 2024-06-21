<?php

$ch = curl_init();

$headers = [
    'Authorization: token YOUR_TOKEN',
    'Content-Type: application/json'
    ];

$payload = json_encode([
    'name' => 'Created from API',
    'description' => 'an example-API created example',
]);

curl_setopt_array($ch, [
    CURLOPT_URL => "https://api.github.com/user/repos",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_USERAGENT => 'cURL',
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $payload

    ]);

$response = curl_exec($ch);

$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);