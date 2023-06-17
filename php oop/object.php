<?php

require_once "properties.php";
require_once "data/Helper.php";

use properties\Person;

$reza = new Person("Reza", "Indonesia");
$reza->sayHello("Dian");

$dea = new \properties\Programmer("Dea", "Indonesia");
$dea->sayHello("Dian");

\Helper\helpMe();

echo \Helper\FULL_NAME . PHP_EOL;
