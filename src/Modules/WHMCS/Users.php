<?php

namespace Leonardomanrich\Cpanelwhm\Modules\WHMCS;

use Leonardomanrich\Cpanelwhm\Requests\Request;

/**
 * @link https://developers.whmcs.com/api/api-index/
 * @name Users
 */
class Users extends Request
{

    /**
     * @link https://developers.whmcs.com/api-reference/getusers/
     *
     * @param int $limitStart
     * @param int $limitNum
     * @param string $sorting
     * @param string $search
     * @return Users|Request
     */
    public function getUsers(
        int    $limitStart = 0,
        int    $limitNum = 25,
        string $sorting = 'ASC',
        string $search = ''
    ): Users|Request
    {
        return $this->setMethod('POST')->setPath("")->addQueryParams([
            'action' => 'GetUsers',
            'limitstart' => $limitStart,
            'limitnum' => $limitNum,
            'sorting' => $sorting,
            'search' => $search
        ]);

    }

    /**
     * @link https://developers.whmcs.com/api-reference/adduser/
     *
     * @param string $firstname
     * @param string $lastname
     * @param string $email
     * @param string $password2
     * @param string $language
     * @return Users|Request
     */
    public function addUser(
        string $firstname,
        string $lastname,
        string $email,
        string $password2,
        string $language = ''
    ): Users|Request
    {
        return $this->setMethod('POST')->setPath("")->addQueryParams([
            'action' => 'AddUser',
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'password2' => $password2,
            'language' => $language
        ]);
    }

    /**
     * @link https://developers.whmcs.com/api-reference/createclientinvite/
     *
     * @param int $client_id
     * @param string $email
     * @param string $permissions
     * @return Users
     */
    public function createClientInvite(
        int    $client_id,
        string $email,
        string $permissions
    ): Users
    {
        return $this->setMethod('POST')->setPath("")->addQueryParams([
            'action' => 'CreateClientInvite',
            'client_id' => $client_id,
            'email' => $email,
            'permissions' => $permissions
        ]);
    }

    /**
     * @link https://developers.whmcs.com/api-reference/deleteuserclient/
     *
     * @param int $user_id
     * @param int $client_id
     * @return Users
     */
    public function deleteUserClient(
        int $user_id,
        int $client_id
    ): Users
    {
        return $this->setMethod('POST')->setPath("")->addQueryParams([
            'action' => 'DeleteUserClient',
            'user_id' => $user_id,
            'client_id' => $client_id
        ]);
    }

    /**
     * @link https://developers.whmcs.com/api-reference/getpermissionslist/
     *
     * @return Users
     */
    public function getPermissionsList(): Users
    {
        return $this->setMethod('GET')->setPath("")->addQueryParams([
            'action' => 'GetPermissionsList'
        ]);
    }

    /**
     * @link https://developers.whmcs.com/api-reference/getuserpermissions/
     *
     * @param int $user_id
     * @param int $client_id
     * @return Users
     */
    public function getUserPermissions(
        int $user_id,
        int $client_id
    ): Users
    {
        return $this->setMethod('GET')->setPath("")->addQueryParams([
            'action' => 'GetUserPermissions',
            'user_id' => $user_id,
            'client_id' => $client_id
        ]);
    }

    /**
     * @link https://developers.whmcs.com/api-reference/resetpassword/
     *
     * @param int $id
     * @param string $email
     * @return Users
     */
    public function resetPassword(
        int    $id,
        string $email
    ): Users
    {
        return $this->setMethod('POST')->setPath("")->addQueryParams([
            'action' => 'ResetPassword',
            'id' => $id,
            'email' => $email
        ]);
    }

    /**
     * @link https://developers.whmcs.com/api-reference/updateuser/
     *
     * @param int $user_id
     * @param string $firstname
     * @param string $lastname
     * @param string $email
     * @param string $password2
     * @param string $language
     * @return Users
     */
    public function updateUser(
        int    $user_id,
        string $firstname,
        string $lastname,
        string $email,
        string $password2,
        string $language = ''
    ): Users
    {
        return $this->setMethod('POST')->setPath("")->addQueryParams([
            'action' => 'UpdateUser',
            'user_id' => $user_id,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'password2' => $password2,
            'language' => $language
        ]);
    }

    /**
     * @link https://developers.whmcs.com/api-reference/updateuserpermissions/
     *
     * @param int $client_id
     * @param string $email
     * @param string $permissions
     * @return Users
     */
    public function updateUserPermissions(
        int    $client_id,
        string $email,
        string $permissions
    ): Users
    {
        return $this->setMethod('POST')->setPath("")->addQueryParams([
            'action' => 'UpdateUserPermissions',
            'client_id' => $client_id,
            'email' => $email,
            'permissions' => $permissions
        ]);
    }

}
