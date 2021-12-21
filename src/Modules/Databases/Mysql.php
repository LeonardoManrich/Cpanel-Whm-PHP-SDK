<?php

namespace Leonardomanrich\Cpanelwhm\Modules\Databases;

use Leonardomanrich\Cpanelwhm\Requests\Request;

//TODO TERMINAR
class Mysql{
    //https://api.docs.cpanel.net/openapi/cpanel/operation/list_databases/

    /**
     * Undocumented function
     *
     * @return void
     */
    //TODO documentar aqui
    public static function list_databases() : Request
    {
        return new Request("GET", "Mysql/list_databases");
    }

    public static function get_host_notes()
    {
        return new Request("GET", "Mysql/get_host_notes");
    }
}