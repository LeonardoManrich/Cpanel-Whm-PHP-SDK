<?php

namespace Leonardomanrich\Cpanelwhm\Requests\Injectors\Authorizations;

use Leonardomanrich\Cpanelwhm\Api\WHMCS;
use Leonardomanrich\Cpanelwhm\Api\CpanelWhm;
use Leonardomanrich\Cpanelwhm\Requests\Request;
use Leonardomanrich\Cpanelwhm\Requests\Injectors\Injector;

class AuthorizationInjector implements Injector, AuthInjector
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

        if (!$this->environment instanceof WHMCS) {

            if (!$this->hasAuthHeader($request)) {
                $request->headers['Authorization'] = 'Basic ' . $this->environment->authorizationKey();
            }
        } else {
            $request->addQueryParams(
                [
                    'identifier' => $this->environment->authQuery()['identifier'],
                    'secret' => $this->environment->authQuery()['secret']
                ]
            );

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

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    //TODO fazer identificar o tipo de auth ao invés de checar se é whmcs
    private function isWhmcsAuth(Request $request)
    {
        $parsed_body = parse_url($request->getBody(), PHP_URL_QUERY);

        return in_array(['identifier', 'secret'], $parsed_body);
    }
}
