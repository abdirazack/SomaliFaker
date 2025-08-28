<?php

namespace SomaliFaker;

use Faker\Generator;
use Illuminate\Support\ServiceProvider;
use SomaliFaker\Provider\so_SO\Address;
use SomaliFaker\Provider\so_SO\Company;
use SomaliFaker\Provider\so_SO\Internet;
use SomaliFaker\Provider\so_SO\Person;
use SomaliFaker\Provider\so_SO\PhoneNumber;
use SomaliFaker\Provider\so_SO\Text;

class SomaliFakerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->resolving(Generator::class, function (Generator $faker) {
            $faker->addProvider(new Person($faker));
            $faker->addProvider(new Address($faker));
            $faker->addProvider(new Company($faker));
            $faker->addProvider(new PhoneNumber($faker));
            $faker->addProvider(new Internet($faker));
            $faker->addProvider(new Text($faker));
            return $faker;
        });
    }
}
