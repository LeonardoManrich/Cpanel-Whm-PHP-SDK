<?php

namespace Leonardomanrich\Cpanelwhm\Http;

use Leonardomanrich\Cpanelwhm\Api\Environment;
use Leonardomanrich\Cpanelwhm\Requests\Injectors\AuthorizationInjector;
use Leonardomanrich\Cpanelwhm\Requests\Injectors\DefaultInjector;

class HttpClient extends ClientCpanelWhm
{

    /**
     * pre-add the injectors.
     *
     * @param Environment $environment
     */
    public function __construct(Environment $environment)
    {

        parent::__construct($environment);
        $this->addInjector(new AuthorizationInjector($environment));
        $this->addInjector(new DefaultInjector());

    }
}
