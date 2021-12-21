<?php

namespace Leonardomanrich\Cpanelwhm\Modules\WHMCS;

use Leonardomanrich\Cpanelwhm\Requests\Request;

//TODO TERMINAR
class Users{
    //https://developers.whmcs.com/api/api-index/

    /**
     * Undocumented function
     *
     * @return void
     */
    //TODO documentar aqui
    public static function getUsers($limitStart = 0, $limitNum = 25, $sorting = 'ASC', $search = '') : Request
    {
        return new Request("GET", "", [], [
            //'form_params' => [
                'action' => 'GetUsers',
                'limitstart' => $limitStart,
                'limitnum' => $limitNum,
                'sorting' => $sorting,
                'search' => $search
            //]
            
        ]);
    }

}