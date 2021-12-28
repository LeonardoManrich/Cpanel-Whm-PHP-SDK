<?php

namespace Leonardomanrich\Cpanelwhm\Api;

use Leonardomanrich\Cpanelwhm\Requests\Request;

/**
 * Undocumented class
 */
//TODO documentar aqui
class WHMCS implements Environment
{

    /**
     * Undocumented variable
     *
     * @var [type]
     */
    //TODO documentar aqui
    private $base_url;

    private $identifier;

    private $secret;

    public function __construct($base_url, $api_identifier, $api_secret)
    {
        $this->base_url = $base_url;
        $this->identifier = $api_identifier;
        $this->secret = $api_secret;
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function uri(): string
    {
        return "/includes/api.php";
    }

    public function base_url(): string
    {
        return $this->base_url;
    }

    public function auth(Request $request): void
    {
        $request->addQueryParams(
            [
                'identifier' => $this->identifier,
                'secret' => $this->secret
            ]
        )->addQueryParams(['responsetype' => 'json']);
    }
}