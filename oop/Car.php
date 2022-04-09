<?php

abstract class Car implements MovableInterface
{
    protected $max_speed;

    protected $speed = 0;

    protected $is_started = false;

    public function __construct(int $max_speed)
    {
        $this->max_speed = $max_speed;
    }

    public function stop() {
        $this->is_started = false;
        $this->speed = 0;
    }
}
