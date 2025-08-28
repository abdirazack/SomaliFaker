<?php

namespace SomaliFaker\Tests;

use SomaliFaker\SomaliFakerServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            SomaliFakerServiceProvider::class,
        ];
    }
}
