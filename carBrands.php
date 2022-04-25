<?php

include 'vendor/autoload.php';

use \PhpLib\AutoBrandGenerator;

for ($i = 0; $i < 4; $i++) {
    echo AutoBrandGenerator::generate() . PHP_EOL;
}
