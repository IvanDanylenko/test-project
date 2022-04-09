<?php

// Racing car, very fast
class Bolid extends Car
{
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
            $this->speed = $this->max_speed;
            return 'Bolid gained maximum speed: ' . $this->speed . ' units';
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

        if ($this->speed - $unit <= 0) {
            $this->stop();
        } else {
            $this->speed -= $unit;
            return 'Bolid decreased speed to ' . $this->speed . ' units';
        }
    }
}
