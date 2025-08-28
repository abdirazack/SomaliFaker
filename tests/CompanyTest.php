<?php

namespace SomaliFaker\Tests;

class CompanyTest extends TestCase
{
    public function test_company()
    {
        $this->assertIsString($this->faker->company);
    }

    public function test_company_prefix()
    {
        $this->assertIsString($this->faker->companyPrefix);
    }

    public function test_company_suffix()
    {
        $this->assertIsString($this->faker->companySuffix);
    }
}
