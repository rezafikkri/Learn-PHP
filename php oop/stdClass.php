<?php

use Helper\MathHelper;

$arr = [
    "firstName" => "Reza Sariful",
    "midleName" => "Sariful",
    "lastName" => "Fikri"
];

$obj = (object) $arr;

// echo "Nama saya $obj->firstName $obj->midleName $obj->lastName" . PHP_EOL;

require_once "MathHelper.php";

$objM = new MathHelper();

$arr2 = (array) $objM;
$obj2 = (object) $arr2;
var_dump($obj2);
