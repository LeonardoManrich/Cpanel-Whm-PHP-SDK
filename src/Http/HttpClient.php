<?php

namespace Leonardomanrich\Cpanelwhm\Http;

use Leonardomanrich\Cpanelwhm\Api\CpanelWhm;

use Leonardomanrich\Cpanelwhm\Http\ClientCpanelWhm;
use Leonardomanrich\Cpanelwhm\Requests\Injectors\DefaultInjector;
use Leonardomanrich\Cpanelwhm\Requests\Injectors\Authorizations\AuthorizationInjector;

/**
 * Undocumented class
 */
//TODO documentar aqui
class HttpClient extends ClientCpanelWhm
{

    /**
     * Undocumented function
     *
     * @param CpanelWhm $environment
     */
    //TODO documentar aqui
    public function __construct(CpanelWhm $environment)
    {

        parent::__construct($environment);
        $this->addInjector(new AuthorizationInjector($environment)); //TODO refator injector de autorização as apis se autenticam de forma diferente
        $this->addInjector(new DefaultInjector());
    }
}
