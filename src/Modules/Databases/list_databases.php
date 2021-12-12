<?php

namespace Leonardomanrich\Cpanelwhm\Modules\Databases;

use Leonardomanrich\Cpanelwhm\Requests\Request;

class list_databases extends Request{
    //https://api.docs.cpanel.net/openapi/cpanel/operation/list_databases/
    public function __construct()
    {
        parent::__construct("GET", "Mysql/list_databases");
        $this->addHeader("Content-Type", "application/json");
        $this->addHeader("X-Requested-With", "XMLHttpRequest");
    }

}