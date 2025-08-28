<?php

namespace SomaliFaker\Tests;

class TextTest extends TestCase
{
    public function test_real_text()
    {
        $this->assertIsString($this->faker->realText());
    }
}
