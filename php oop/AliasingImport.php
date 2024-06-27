<?php

require_once "properties.php";
require_once "data/Helper.php";

use properties\Person;
use function Helper\helpMe;
use const Helper\FULL_NAME;

$reza = new Person("Reza", "Indonesia");
$reza->sayHello("Dian");

$dea = new \properties\Programmer("Dea", "Indonesia");
$dea->sayHello("Dian");

helpMe();

echo FULL_NAME . PHP_EOL;
