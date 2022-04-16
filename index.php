<?php

include 'autoload.php';

use Ithillel\Auto\Bolid;
use Ithillel\Auto\Engine;
use Ithillel\Auto\Truck;
use Ithillel\Staff\Driver;

Truck::setCountry(Truck::COUNTRY_USA);
Bolid::setCountry(Bolid::COUNTRY_CANADA);

$driver = new Driver();

$truck = new Truck(20);
$truck->setWeight(50);

$engine = new Engine(50);

// Отношение "Aгрегация"
$bolid = new Bolid($engine);

$cars = [$truck, $bolid];

foreach ($cars as $car) {
    $driver->drive($car);
}
