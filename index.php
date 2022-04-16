<?php

include 'oop/MovableInterface.php';
include 'oop/Car.php';
include 'oop/Truck.php';
include 'oop/Bolid.php';

Truck::setCountry(Truck::COUNTRY_USA);
Bolid::setCountry(Bolid::COUNTRY_CANADA);

function driveCar(MovableInterface $car)
{
    echo $car->info() . PHP_EOL . PHP_EOL;
    echo $car->start() . PHP_EOL;
    echo $car->up(80) . PHP_EOL;
    echo $car->down(10) . PHP_EOL;
    echo $car->stop() . PHP_EOL . PHP_EOL;
}

$truck = new Truck(20);
$truck->setWeight(50);
$cars = [$truck, new Bolid(50)];

foreach ($cars as $car) {
    driveCar($car);
}
