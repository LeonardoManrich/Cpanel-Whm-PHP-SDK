<?php

namespace Leonardomanrich\Cpanelwhm\Http;

use Leonardomanrich\Cpanelwhm\Api\CpanelWhm;

use Leonardomanrich\Cpanelwhm\Http\ClientCpanelWhm;
use Leonardomanrich\Cpanelwhm\Requests\DefaultInjector;
use Leonardomanrich\Cpanelwhm\Requests\AuthorizationInjector;

/**
 * Undocumented class
 */
//TODO documentar aqui
class HttpClient extends ClientCpanelWhm{

    /**
     * Undocumented function
     *
     * @param CpanelWhm $environment
     */
    //TODO documentar aqui
    public function __construct(CpanelWhm $environment)
    {

        parent::__construct($environment);
        $this->addInjector(new AuthorizationInjector($environment));
        $this->addInjector(new DefaultInjector());
    }

}