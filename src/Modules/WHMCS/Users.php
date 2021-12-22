<?php

namespace Leonardomanrich\Cpanelwhm\Modules\WHMCS;

use Leonardomanrich\Cpanelwhm\Requests\Request;

//TODO TERMINAR
class Users extends Request
{

    /**
     * Undocumented function
     *
     * @return void
     */
    //TODO documentar aqui
    public function getUsers($limitStart = 0, $limitNum = 25, $sorting = 'ASC', $search = '')
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
