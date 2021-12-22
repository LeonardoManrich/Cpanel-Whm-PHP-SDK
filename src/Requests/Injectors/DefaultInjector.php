<?php

namespace Leonardomanrich\Cpanelwhm\Requests\Injectors;

use Leonardomanrich\Cpanelwhm\Requests\Injectors\Injector;

class DefaultInjector implements Injector
{

    public function inject($request)
    {
        $request->addOption('timeout', 10)
        ->addOption('connect_timeout', 2)
        ->addQueryParams(['responsetype' => 'json'] );

    }

}