<?php

namespace Leonardomanrich\Cpanelwhm\Requests\Injectors;

use Leonardomanrich\Cpanelwhm\Requests\Request;

/**
 * Undocumented interface
 */
interface Injector
{
    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    //TODO documentar aqui
    public function inject(Request $request);
}
