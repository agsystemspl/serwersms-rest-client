<?php

use AGSystems\SerwerSMS\REST\Client as SerwerSmsClient;

require __DIR__ . "/../vendor/autoload.php";

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

$client = new SerwerSmsClient(
    getenv('SERWERSMS_API_TOKEN')
);

$response = $client->messages->send_sms->post([
    'phone' => '+48...000',
    'text' => 'Treść wiadomości SMS',
    'test' => true, // Oznacza zapytanie jako testowe
    'sender' => 'AppsPL'
]);

print_r($response);
