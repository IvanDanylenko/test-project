<?php

abstract class Car implements MovableInterface
{
    public const COUNTRY_USA = 'USA';

    public const COUNTRY_CANADA = 'Canada';

    protected static $country;

    protected $max_speed;

    protected $speed = 0;

    protected $is_started = false;

    public function __construct(int $max_speed)
    {
        $this->max_speed = $max_speed;
    }

    public function stop()
    {
        $this->is_started = false;
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
