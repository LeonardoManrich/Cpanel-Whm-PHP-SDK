<?php

namespace Leonardomanrich\Cpanelwhm\Api;

use Leonardomanrich\Cpanelwhm\Requests\Request;

/**
 * Environment of WHMCS api
 */
class WHMCS implements Environment
{

    /**
     * Base url of your api
     * Ex: https://www.domain.com
     *
     * @var string $base_url
     */
    private string $base_url;

    /**
     * The identifier of WHMCS panel
     *
     * @link https://docs.whmcs.com/API_Authentication_Credentials#Creating_Admin_API_Authentication_Credentials
     *
     * @var string
     */
    private string $identifier;

    /**
     * The secret of WHMCS panel
     *
     * @link https://docs.whmcs.com/API_Authentication_Credentials#Creating_Admin_API_Authentication_Credentials
     *
     * @var string
     */
    private string $secret;

    public function __construct($base_url, $api_identifier, $api_secret)
    {
        $this->base_url = $base_url;
        $this->identifier = $api_identifier;
        $this->secret = $api_secret;
    }

    /**
     * Implements te uri of WHMCS
     * Default is /includes/api.php, if you have changed the directory, change it.
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

    /**
     * Implements the authorization of WHMCS
     * @param Request $request
     * @return void
     */
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