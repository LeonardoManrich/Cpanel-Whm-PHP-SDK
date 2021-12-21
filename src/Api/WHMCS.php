<?php

namespace Leonardomanrich\Cpanelwhm\Api;

/**
 * Undocumented class
 */
//TODO documentar aqui
class WHMCS extends CpanelWhm{

    /**
     * Undocumented variable
     *
     * @var [type]
     */
    //TODO documentar aqui
    private $base_url;


    /**
     * Undocumented function
     *
     * @param [type] $base_url
     * @param [type] $port
     * @param [type] $username
     * @param [type] $userpassword
     */
    //TODO refatorar
    public function __construct($base_url, $api_identifier, $api_secret)
    {   
        $this->base_url = $base_url;
        $this->api_identifier = $api_identifier;
        $this->api_secret = $api_secret;

        parent::__construct($api_identifier, $api_secret);
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

}