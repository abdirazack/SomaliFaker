<?php

namespace SomaliFaker\Tests;

class PersonTest extends TestCase
{
    public function test_first_name()
    {
        $this->assertIsString($this->faker->firstName);
    }

    public function test_last_name()
    {
        $this->assertIsString($this->faker->lastName);
    }

    public function test_name()
    {
        $this->assertIsString($this->faker->name);
    }
}
