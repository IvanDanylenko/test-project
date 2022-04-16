<?php

namespace Ithillel\Staff;

use Ithillel\Auto\MovableInterface;

class Driver
{
    public function drive(MovableInterface $car)
    {
        echo $car->info() . PHP_EOL . PHP_EOL;
        echo $car->start() . PHP_EOL;
        echo $car->up(80) . PHP_EOL;
        echo $car->down(10) . PHP_EOL;
        echo $car->stop() . PHP_EOL . PHP_EOL;

    }
}
