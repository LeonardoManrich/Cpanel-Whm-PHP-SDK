<?php

namespace Leonardomanrich\Cpanelwhm\Http;

use Leonardomanrich\Cpanelwhm\Api\CpanelWhm;
use Leonardomanrich\Cpanelwhm\Requests\AuthorizationInjector;

class HttpClient extends ClientCpanelWhm{

    public function __construct(CpanelWhm $environment)
    {

        parent::__construct($environment);
        $this->addInjector(new AuthorizationInjector($environment));
        
    }

}