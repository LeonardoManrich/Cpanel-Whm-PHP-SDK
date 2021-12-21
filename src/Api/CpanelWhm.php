<?php

namespace Leonardomanrich\Cpanelwhm\Api;

use Leonardomanrich\Cpanelwhm\Api\Environment;

/**
 * Undocumented class
 */
//TODO documentar aqui
abstract class CpanelWhm implements Environment
{   
    /**
     * Undocumented variable
     *
     * @var string
     */
    //TODO documentar aqui
    private string $username;

    /**
     * Undocumented variable
     *
     * @var string
     */
    //TODO documentar aqui
    private string $userpassword;

    public function __construct($username, $userpassword)
    {
        $this->username = $username;
        $this->userpassword = $userpassword;
    }

    //TODO Adicionar mais meios de autenticação
    public function authorizationKey(): string
    {
        return base64_encode($this->username . ":" . $this->userpassword);
    }

    public function authQuery()
    {
        return [
            'identifier' => $this->username,
            'secret' => $this->userpassword
        ];
    }
}
