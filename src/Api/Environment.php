<?php

namespace Leonardomanrich\Cpanelwhm\Api;

use Leonardomanrich\Cpanelwhm\Requests\Request;

interface Environment
{
    /**
     * Return the base_url. Ex: https://www.domain.com
     *
     * @return string
     */
    public function base_url(): string;

    /**
     * Return the uri. Ex: /include/api.php
     *
     * @return void
     */
    //TODO documentar aqui
    public function uri(): string;


    /**
     * Inject the authorization of an environment
     *
     * @param Request $request
     * @return void
     */
    public function auth(Request $request): void;

}
