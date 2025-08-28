<?php

namespace SomaliFaker\Tests;

class InternetTest extends TestCase
{
    public function test_email()
    {
        $this->assertIsString($this->faker->email);
    }

    public function test_domain_name()
    {
        $this->assertIsString($this->faker->domainName);
    }
}
