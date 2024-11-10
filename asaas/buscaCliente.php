<?php
    require_once('vendor/autoload.php');

    $client = new \GuzzleHttp\Client();

    $response = $client->request('GET', 'https://sandbox.asaas.com/api/v3/customers', [
        'headers' => [
            'accept' => 'application/json',
            'access_token' => '$aact_YTU5YTE0M2M2N2I4MTliNzk0YTI5N2U5MzdjNWZmNDQ6OjAwMDAwMDAwMDAwMDAwOTQzMDM6OiRhYWNoXzQzMTE0ZTc1LTM0NmQtNGM1YS05OGE4LWU0MTVjNTExMDIxMQ==',
        ],
    ]);

    echo $response->getBody();

?>