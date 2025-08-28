<?php

namespace SomaliFaker\Provider\so_SO;

class Company extends \Faker\Provider\Base
{
    protected static $companyPrefixes = array(
        'Shirkadda', 'Warshadda'
    );

    protected static $companySuffixes = array(
        'Tours & Cargo', 'GROUP OF COMPANIES', 'GENERAL COMPANY', 'FOOD FACTORIES', 'BUSINESS CENTER',
        'Fishing Company', 'General Trading Company', 'Travel Hajj And Umrah Services',
        'Clearance & Forwarding Agency', 'COSMETIC & GARMENT COMPANY', 'General Services', 'Healthcare',
        'Service Group LTD', 'Specialist Hospital', 'Trading Co.'
    );

    public function companyPrefix()
    {
        return static::randomElement(static::$companyPrefixes);
    }

    public function companySuffix()
    {
        return static::randomElement(static::$companySuffixes);
    }

    public function company()
    {
        $format = static::randomElement(array(
            '{{companyPrefix}} {{lastName}}',
            '{{lastName}} {{companySuffix}}',
        ));

        return $this->generator->parse($format);
    }
}
