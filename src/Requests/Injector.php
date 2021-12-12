<?php

namespace Leonardomanrich\Cpanelwhm\Requests;

interface Injector
{
    public function inject(Request $request);
}
