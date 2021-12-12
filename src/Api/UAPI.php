<?php

namespace Leonardomanrich\Cpanelwhm\Api;

class UAPI extends CpanelWhm
{
    private $port;
    private $base_url;

    public function __construct($base_url, $port, $username, $userpassword)
    {   
        $this->port = $port;
        $this->base_url = $base_url;

        parent::__construct($username, $userpassword);
    }

    public function uri(): string
    {
        return "/execute/";
    }

    public function base_url(): string
    {
        return $this->base_url . ':' .$this->port;
    }
}