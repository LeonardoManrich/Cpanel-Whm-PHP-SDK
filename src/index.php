<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../vendor/autoload.php';
echo "<pre>";
use Leonardomanrich\Cpanelwhm\Api\UAPI;
use Leonardomanrich\Cpanelwhm\Api\Ports;
use Leonardomanrich\Cpanelwhm\Http\HttpClient;
use Leonardomanrich\Cpanelwhm\Modules\Databases\Mysql\list_databases;
use Leonardomanrich\Cpanelwhm\Modules\Databases\Mysql\Mysql;
use Leonardomanrich\Cpanelwhm\Modules\Fileman\Fileman;

echo "<pre>";

$environment = new UAPI(
        'https://allrise.com.br',
        Ports::SECURE_API,
        'allris02', 
        'qF81q16Lfa'
    );

$cpanelClient = new HttpClient($environment);

//var_dump($cpanelClient->execute(Mysql::list_databases())->result);
/* $teste = [
    'dir' => 'public_html',
    'type' => 'dir',
    'type' => 'file'
]; */

//var_dump($cpanelClient->execute(Fileman::get_file_content('public_html', 'index.html'))->result);