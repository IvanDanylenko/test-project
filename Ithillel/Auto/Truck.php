<?php

namespace Ithillel\Auto;

class Truck extends Car
{
    public const MAX_WEIGHT = 60;

    protected static $country;

    private $weight;

    public function start()
    {
        if ($this->is_started) {
            return 'Truck can\'t start again before it was stopped';
        } else {
            $this->is_started = true;
            $this->speed = 0;
            return 'Truck started to move';
        }
    }

    public function stop()
    {
        parent::stop();
        return 'Truck stopped';
    }

    public function up($unit)
    {
        if (!$this->is_started) {
            return 'Truck should be started first';
        }

        if ($this->speed + $unit >= $this->max_speed) {
            $this->speed = $this->max_speed;
            return 'Truck gained maximum speed: ' . $this->speed . ' units';
        } else {
            $this->speed += $unit;
            return 'Truck increased speed to ' . $this->speed . ' units';
        }
    }

    public function down($unit)
    {
        if (!$this->is_started) {
            return 'Truck should be started first';
        }

        if ($this->speed - $unit <= 0) {
            $this->stop();
        } else {
            $this->speed -= $unit;
            return 'Truck decreased speed to ' . $this->speed . ' units';
        }
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight(int $weight)
    {
        if ($weight > self::MAX_WEIGHT) {
            return 'Truck can\'t carry more than ' . self::MAX_WEIGHT;
        } else {
            $this->weight = $weight;
            return 'Current Truck\'s weight is ' . $this->weight;
        }
    }

    public function info()
    {
        return 'Measure performance of Truck from ' . self::$country . PHP_EOL . 'Truck carry weight of ' . $this->weight . ' units.';
    }
}
