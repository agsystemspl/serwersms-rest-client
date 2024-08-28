# SerwerSMS Rest Client

## Dokumentacja

Dokumentacja API SerwerSMS dostępna jest na stronie:  
https://dev.serwersms.pl/https-api-v2/wprowadzenie

## Inicjowanie klienta

```php
use AGSystems\SerwerSMS\REST\Client as SerwerSmsClient;

$apiKey = '___wygenerowany_klucz_api___';
$client = new SerwerSmsClient($apiKey);

$client->...
```

## Wysyłanie wiadomości SMS o jednakowej treści
HTTPS API v2 / Wysyłanie wiadomości SMS o jednakowej treści

Dokumentacja parametrów:
https://dev.serwersms.pl/https-api-v2/wysylanie-wiadomosci-sms-o-jednakowej-tresci

```php
$response = $client->messages->send_sms->post([
    'phone' => '+48...500',
    'text' => 'Test SMS',
    'test' => true,
    // ... pozostałe parametry np. sender itp.
]);
```