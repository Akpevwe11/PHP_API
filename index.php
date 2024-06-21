<?php

$api_key = "YOUR_API_KEY";

$data = [
    "name" => "Alice",
    "email" => "alice@example.com"
];

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://api.strie.com/v1/customers",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERPWD => $api_key . ":",
    CURLOPT_POSTFIELDS => $data,
]);

$response = curl_exec($curl);

curl_close($curl);

