<?php

require_once "data/Manager.php";

$arr = [
    "firstName" => "Reza Sariful",
    "midleName" => "Sariful",
    "lastName" => "Fikri"
];

$obj = (object) $arr;
var_dump($obj);
echo "Nama saya $obj->firstName $obj->midleName $obj->lastName" . PHP_EOL;

$objM = new Manager("Reza");

$arr2 = (array) $objM;
$obj2 = (object) $arr2;
var_dump($arr2);
var_dump($obj2);
