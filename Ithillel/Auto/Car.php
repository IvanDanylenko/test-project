<?php

namespace Ithillel\Auto;

abstract class Car implements MovableInterface
{
    public const COUNTRY_USA = 'USA';

    public const COUNTRY_CANADA = 'Canada';

    protected static $country;

    protected $speed = 0;

    public function stop()
    {
        $this->speed = 0;
    }

    public static function getCountry()
    {
        // static keyword allows to access static property of class where call happened
        return static::$country;
    }

    public static function setCountry(string $country)
    {
        static::$country = $country;
    }
}
