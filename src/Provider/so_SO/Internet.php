<?php

namespace SomaliFaker\Provider\so_SO;

class Internet extends \Faker\Provider\Internet
{
    protected static $tld = array('so', 'com.so', 'net.so', 'org.so');

    /**
     * @example 'liibaan.so'
     */
    public function domainName()
    {
        return strtolower($this->generator->lastName()) . '.' . static::tld();
    }
}
