<?php

namespace Leonardomanrich\Cpanelwhm\Api;

use Leonardomanrich\Cpanelwhm\Api\Environment;

abstract class CpanelWhm implements Environment
{
    private string $username;
    private string $userpassword;

    public function __construct($username, $userpassword)
    {
        $this->username = $username;
        $this->userpassword = $userpassword;
    }

    public function authorizationKey(): string
    {
        return base64_encode($this->username . ":" . $this->userpassword);
    }
}
