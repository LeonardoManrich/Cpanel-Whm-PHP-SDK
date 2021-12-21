<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../vendor/autoload.php';
echo "<pre>";
use Leonardomanrich\Cpanelwhm\Api\UAPI;
use Leonardomanrich\Cpanelwhm\Api\Ports;
use Leonardomanrich\Cpanelwhm\Api\WHMCS;
use Leonardomanrich\Cpanelwhm\Http\HttpClient;
use Leonardomanrich\Cpanelwhm\Modules\WHMCS\Users;

use Leonardomanrich\Cpanelwhm\Modules\Databases\Mysql;
use Leonardomanrich\Cpanelwhm\Modules\Fileman\Fileman;
use Leonardomanrich\Cpanelwhm\Modules\Databases\Mysql\list_databases;

echo "<pre>";

/* $environment = new UAPI(
        'https://allrise.com.br',
        Ports::SECURE_API,
        'allris02', 
        'qF81q16Lfa'
    ); */

$environment = new WHMCS(
    'https://allrise.com.br',
    'jkGNoqltrahvKGXGe73WJp689KwijXj6', 
    'zgu8Riyk2FIKDP3TLKfYgHS7LKEQ78Ir'
);

$cpanelClient = new HttpClient($environment);

//var_dump($cpanelClient->execute(Mysql::get_host_notes())->result);
/* $teste = [
    'dir' => 'public_html',
    'type' => 'dir',
    'type' => 'file'
]; */

//var_dump($cpanelClient->execute(Fileman::get_file_content('public_html', 'index.html'))->result);
var_dump($cpanelClient->execute(Users::getUsers()));