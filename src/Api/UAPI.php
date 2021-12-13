<?php

namespace Leonardomanrich\Cpanelwhm\Api;

/**
 * Undocumented class
 */
//TODO documentar aqui
class UAPI extends CpanelWhm
{
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    //TODO documentar aqui
    private $port;

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
    public function __construct($base_url, $port, $username, $userpassword)
    {   
        $this->port = $port;
        $this->base_url = $base_url;

        parent::__construct($username, $userpassword);
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    
    public function uri(): string
    {
        return "/execute/";
    }

    public function base_url(): string
    {
        return $this->base_url . ':' .$this->port;
    }
}