<?php

namespace Test;

use Leonardomanrich\Cpanelwhm\Api\WHMCS;
use Leonardomanrich\Cpanelwhm\Http\HttpClient;

class TestClient
{
    public static function client()
    {
        return new HttpClient(self::environment());
    }

    private static function environment()
    {
        $api_identifier = 'jkGNoqltrahvKGXGe73WJp689KwijXj6';
        $api_secret = 'zgu8Riyk2FIKDP3TLKfYgHS7LKEQ78Ir';

        return new WHMCS(
            'https://allrise.com.br/financeiro',
            $api_identifier,
            $api_secret
        );
    }
}