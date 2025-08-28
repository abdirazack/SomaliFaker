<?php

namespace SomaliFaker\Tests;

use SomaliFaker\SomaliFakerServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * @var \Faker\Generator
     */
    protected $faker;

    public function setUp(): void
    {
        parent::setUp();

        $this->faker = $this->app->make(\Faker\Generator::class);
    }

    protected function getPackageProviders($app)
    {
        return [
            SomaliFakerServiceProvider::class,
        ];
    }
}
