<?php

namespace Leonardomanrich\Cpanelwhm\Requests;

use Leonardomanrich\Cpanelwhm\Api\CpanelWhm;
use Leonardomanrich\Cpanelwhm\Http\ClientCpanelWhm;

class AuthorizationInjector implements Injector
{
    private CpanelWhm $environment;

    public function __construct(CpanelWhm $environment)
    {
        $this->environment = $environment;

    }

    public function inject($request)
    {
        if (!$this->hasAuthHeader($request)) {
            $request->headers['Authorization'] = 'Basic ' . $this->environment->authorizationKey();
        }
    }

    private function hasAuthHeader(Request $request)
    {
        return $request->getHeader("Authorization") ? true : false;
    }
}