<?php

namespace Leonardomanrich\Cpanelwhm\Requests\Injectors;

use Leonardomanrich\Cpanelwhm\Api\Environment;
use Leonardomanrich\Cpanelwhm\Requests\Request;
use Leonardomanrich\Cpanelwhm\Requests\Injectors\Injector;

class AuthorizationInjector implements Injector
{
    /**
     * UAPI, WHMCS, etc...
     *
     * @var Environment $environment
     */
    private Environment $environment;

    public function __construct(Environment $environment)
    {
        $this->environment = $environment;
    }

    /**
     * Handle request to add authorization
     *
     * @param Request $request
     * @return void
     */
    public function inject(Request $request) : void
    {
        $this->environment->auth($request);
    }

}
