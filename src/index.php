<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../vendor/autoload.php';
echo "<pre>";

use Leonardomanrich\Cpanelwhm\Api\Ports;
use Leonardomanrich\Cpanelwhm\Api\UAPI;
use Leonardomanrich\Cpanelwhm\Api\WHMCS;
use Leonardomanrich\Cpanelwhm\Http\HttpClient;
use Leonardomanrich\Cpanelwhm\Modules\Databases\Mysql\list_databases;
use Leonardomanrich\Cpanelwhm\Modules\Fileman\Fileman;
use Leonardomanrich\Cpanelwhm\Modules\WHMCS\Users;

echo "<pre>";

$environment = new UAPI(
    'https://allrise.com.br',
    Ports::SECURE_API,
    'allris02',
    'qF81q16Lfa'
);

/*$environment = new WHMCS(
    'https://allrise.com.br/financeiro',
    'jkGNoqltrahvKGXGe73WJp689KwijXj6',
    'zgu8Riyk2FIKDP3TLKfYgHS7LKEQ78Ir'
);*/

$cpanelClient = new HttpClient($environment);

$mysql = new \Leonardomanrich\Cpanelwhm\Modules\Databases\Mysql();

var_dump($cpanelClient->execute($mysql->get_host_notes())->result);
/*$teste = [
    'dir' => 'public_html',
    'type' => 'dir',
    'type' => 'file'
];
$fileman = new Fileman();
var_dump($cpanelClient->execute($fileman->get_file_content('public_html', 'index.html'))->result);*/
//$Users = new Users();

//var_dump($cpanelClient->execute($Users->getUsers()));