<?php

namespace Leonardomanrich\Cpanelwhm\Requests\Injectors;

use Leonardomanrich\Cpanelwhm\Requests\Request;

/**
 * Undocumented interface
 */
interface Injector
{
    /**
     * @param Request $request
     * @return void
     */
    public function inject(Request $request): void;
}
