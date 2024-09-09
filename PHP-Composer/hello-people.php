<?php

require_once __DIR__ . '/vendor/autoload.php';

use RezaFikkri\PHPComposer\Data\People;

$people = new People;

echo $people->helloPeople('Reza');
