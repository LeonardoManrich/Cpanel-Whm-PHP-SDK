<?php

namespace Leonardomanrich\Cpanelwhm\Requests;

class DefaultInjector implements Injector
{

    public function inject($request)
    {
        $request->addOption('timeout', 10);
        $request->addOption('connect_timeout', 2);
        $request->body['responsetype'] = 'json';

    }

}