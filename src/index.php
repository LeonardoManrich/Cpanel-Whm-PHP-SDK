<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../vendor/autoload.php';
echo "<pre>";
/* use Leonardomanrich\Cpanelwhm\Api\UAPI;
use Leonardomanrich\Cpanelwhm\Api\Ports;
use Leonardomanrich\Cpanelwhm\Http\HttpClient;
use Leonardomanrich\Cpanelwhm\Modules\Databases\list_databases;
echo "<pre>";

$environment = new UAPI(
        'https://allrise.com.br',
        Ports::SECURE_API,
        'allris02', 
        'qF81q16Lfa'
    );

$cpanelClient = new HttpClient($environment);

var_dump($cpanelClient->execute(new list_databases())); */

$client = new GuzzleHttp\Client([
    'base_uri' => 'https://allrise.com.br:2083/execute/',
    'headers' => [
        'Authorization' => 'Basic YWxscmlzMDI6cUY4MXExNkxmYQ=='
    ]
]);

$response = $client->request('GET', 'Mysql/list_databases');

var_dump(json_decode($response->getBody()->getContents()));