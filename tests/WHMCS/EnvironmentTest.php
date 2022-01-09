<?php

namespace Test\WHMCS;

use Leonardomanrich\Cpanelwhm\Api\WHMCS;
use PHPUnit\Framework\TestCase;

final class EnvironmentTest extends TestCase
{

    public function testBuildUri()
    {

        $environment = new WHMCS(
            'https://test.com',
            '...',
            '...'
        );

        $uri = $environment->base_url() . $environment->uri();

        $this->assertEquals('https://test.com/includes/api.php', $uri);
    }

}