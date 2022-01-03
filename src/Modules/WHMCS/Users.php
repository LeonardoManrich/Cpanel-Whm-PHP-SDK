<?php

namespace Leonardomanrich\Cpanelwhm\Modules\WHMCS;

use Leonardomanrich\Cpanelwhm\Requests\Request;

//TODO TERMINAR

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
        return $this->setMethod('GET')->setPath("")->addQueryParams([
            'action' => 'GetUsers',
            'limitstart' => $limitStart,
            'limitnum' => $limitNum,
            'sorting' => $sorting,
            'search' => $search
        ]);

    }
}
