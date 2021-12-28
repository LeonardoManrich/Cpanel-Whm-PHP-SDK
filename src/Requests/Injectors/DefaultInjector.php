<?php

namespace Leonardomanrich\Cpanelwhm\Requests\Injectors;

use Leonardomanrich\Cpanelwhm\Requests\Request;

class DefaultInjector implements Injector
{

    public function inject(Request $request): void
    {
        $request->addOption('timeout', 10)
            ->addOption('connect_timeout', 2);

    }

}