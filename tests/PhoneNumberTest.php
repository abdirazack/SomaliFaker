<?php

namespace SomaliFaker\Tests;

class PhoneNumberTest extends TestCase
{
    public function test_phone_number()
    {
        $this->assertIsString($this->faker->phoneNumber);
    }
}
