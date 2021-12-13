<?php

namespace Leonardomanrich\Cpanelwhm\Requests;

use Leonardomanrich\Cpanelwhm\Api\CpanelWhm;
use Leonardomanrich\Cpanelwhm\Http\ClientCpanelWhm;

class AuthorizationInjector implements Injector
{
    /**
     * Undocumented variable
     *
     * @var CpanelWhm
     */
    //TODO documentar aqui
    private CpanelWhm $environment;

    /**
     * Undocumented function
     *
     * @param CpanelWhm $environment
     */
    //TODO documentar aqui
    public function __construct(CpanelWhm $environment)
    {
        $this->environment = $environment;

    }

    /**
     * Undocumented function
     *
     * @param [type] $request
     * @return void
     */
    //TODO documentar aqui
    public function inject($request)
    {
        if (!$this->hasAuthHeader($request)) {
            $request->headers['Authorization'] = 'Basic ' . $this->environment->authorizationKey();
        }
    }
    
    /**
     * Undocumented function
     *
     * @param Request $request
     * @return boolean
     */
    //TODO documentar aqui
    private function hasAuthHeader(Request $request)
    {
        return $request->getHeader("Authorization") ? true : false;
    }
}