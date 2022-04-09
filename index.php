<?php

include 'oop/MovableInterface.php';
include 'oop/Car.php';
include 'oop/Truck.php';
include 'oop/Bolid.php';

function driveCar(MovableInterface $car)
{
    echo $car->start() . PHP_EOL;
    echo $car->up(80) . PHP_EOL;
    echo $car->down(10) . PHP_EOL;
    echo $car->stop() . PHP_EOL;
}

$cars = [new Truck(20), new Bolid(200)];

foreach ($cars as $car) {
    driveCar($car);
}
