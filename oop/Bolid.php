<?php

// Racing car, very fast
class Bolid extends Car
{
    public const TURBO_SPEED_INCREASE = 50;

    // Require to override country of parent class
    protected static $country;

    // Number of times Bolid can overcome his speed limit;
    private $turboCharges = 1;

    private $isTurbo = false;

    public function start()
    {
        if ($this->is_started) {
            return 'Bolid can\'t start again before it was stopped';
        } else {
            $this->is_started = true;
            $this->speed = 0;
            return 'Bolid started to move';
        }
    }

    public function stop()
    {
        parent::stop();
        return 'Bolid stopped';
    }

    public function up($unit)
    {
        if (!$this->is_started) {
            return 'Bolid should be started first';
        }

        if ($this->speed + $unit >= $this->max_speed) {
            if ($this->turboCharges > 0) {
                $this->speed = $this->max_speed + self::TURBO_SPEED_INCREASE;
                $this->turboCharges--;
                $this->isTurbo = true;
                return 'Bolid used turbo, his current speed is ' . $this->speed . ' units';
            } else {
                $this->speed = $this->max_speed;
                return 'Bolid gained maximum speed: ' . $this->speed . ' units';
            }
        } else {
            $this->speed += $unit;
            return 'Bolid increased speed to ' . $this->speed . ' units';
        }
    }

    public function down($unit)
    {
        if (!$this->is_started) {
            return 'Bolid should be started first';
        }

        $downUnits = $unit;
        if ($this->isTurbo) {
            $this->isTurbo = false;
            $downUnits += self::TURBO_SPEED_INCREASE;
        }

        if ($this->speed - $downUnits <= 0) {
            $this->stop();
        } else {
            $this->speed -= $downUnits;
            return 'Bolid decreased speed to ' . $this->speed . ' units';
        }
    }

    public function info()
    {
        return 'Measure performance of Bolid from ' . self::$country;
    }
}
