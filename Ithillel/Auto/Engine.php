<?php

namespace Ithillel\Auto;

class Engine
{
    private $maxSpeed;

    private $isStarted = false;

    public function __construct(int $maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }

    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    public function getIsStarted()
    {
        return $this->isStarted;
    }

    public function start()
    {
        $this->isStarted = true;
        return 'Engine started';
    }

    public function stop()
    {
        $this->isStarted = false;
        return 'Engine stopped';

    }
}
