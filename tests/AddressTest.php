<?php

namespace SomaliFaker\Tests;

class AddressTest extends TestCase
{
    public function test_city()
    {
        $this->assertIsString($this->faker->city);
    }

    public function test_district()
    {
        $this->assertIsString($this->faker->district);
    }

    public function test_street_name()
    {
        $this->assertIsString($this->faker->streetName);
    }

    public function test_address()
    {
        $this->assertIsString($this->faker->address);
    }
}
