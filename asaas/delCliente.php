<?php
    require_once('vendor/autoload.php');

    if(isset($_POST['cust'])){ 
        $client = new \GuzzleHttp\Client();
        $response = $client->request('DELETE', 'https://sandbox.asaas.com/api/v3/customers/'.$_POST['cust'], [
            'headers' => [
            'accept' => 'application/json',
            'access_token' => '$aact_YTU5YTE0M2M2N2I4MTliNzk0YTI5N2U5MzdjNWZmNDQ6OjAwMDAwMDAwMDAwMDAwOTQzMDM6OiRhYWNoXzQzMTE0ZTc1LTM0NmQtNGM1YS05OGE4LWU0MTVjNTExMDIxMQ==',
        ],
        ]);

        echo $response->getBody();
    }
?>