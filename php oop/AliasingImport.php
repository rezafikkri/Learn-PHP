<?php

require_once "properties.php";
require_once "data/Helper.php";

use properties\Person;
use function Helper\helpMe as help;
use const Helper\FULL_NAME;

$reza = new Person("Reza", "Indonesia");
$reza->sayHello("Dian");

$dea = new \properties\Programmer("Dea", "Indonesia");
$dea->sayHello("Dian");

help();

echo FULL_NAME . PHP_EOL;
