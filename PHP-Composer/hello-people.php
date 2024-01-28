<?php

use RezaFikkri\Data\People;

require_once __DIR__ . '/vendor/autoload.php';

$people = new People('Reza');
echo $people->sayHello('Adel') . PHP_EOL;
