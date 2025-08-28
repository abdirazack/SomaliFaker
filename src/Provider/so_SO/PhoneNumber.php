<?php

namespace SomaliFaker\Provider\so_SO;

class PhoneNumber extends \Faker\Provider\Base
{
    protected static $phonePrefixes = ['61', '62', '63', '65', '68', '90'];

    public function phoneNumber()
    {
        return "+252 " . static::randomElement(static::$phonePrefixes) . " " . $this->generator->numerify('#######');
    }
}
