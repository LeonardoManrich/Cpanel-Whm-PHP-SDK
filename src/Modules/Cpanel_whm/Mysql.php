<?php

namespace Leonardomanrich\Cpanelwhm\Modules\Cpanel_whm;

use Leonardomanrich\Cpanelwhm\Requests\Request;

//TODO TERMINAR

/**
 * @link https://api.docs.cpanel.net/openapi/cpanel/tag/Database-Information/
 * @name Mysql
 */
class Mysql extends Request
{

    /**
     * @link https://api.docs.cpanel.net/openapi/cpanel/operation/list_databases/
     *
     * @return Request
     */
    public function list_databases(): Request
    {
        return $this->setMethod('GET')->setPath("Mysql/list_databases");
    }

    /**
     * @link https://api.docs.cpanel.net/openapi/cpanel/operation/get_host_notes/
     *
     * @return Request
     */
    public function get_host_notes(): Request
    {
        return $this->setMethod('GET')->setPath("Mysql/get_host_notes");
    }
}