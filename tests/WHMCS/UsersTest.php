<?php

namespace Test\WHMCS;

use Leonardomanrich\Cpanelwhm\Modules\WHMCS\Users;
use PHPUnit\Framework\TestCase;


final class UsersTest extends TestCase
{

    public function testGetUsers()
    {

        $Users = new Users();

        $client = \Test\TestClient::client();

        $response = $client->execute($Users->getUsers())->result;

        $this->assertObjectHasAttribute('users', $response);

    }

}