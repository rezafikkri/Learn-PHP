<?php

require_once "properties.php";

$reza = new \properties\Person("Reza", "Indonesia");

$reza->sayHello("Dian");
echo "Program selesai" . PHP_EOL;

$dea = new \properties\Programmer("Dea", "Indonesia");
$dea->sayHello("Dian");
