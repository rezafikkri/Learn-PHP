<?php

use properties\Person;

require_once "data/Manager.php";
require_once "properties.php";

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

$person = new Person('Reza', 'Kepahiang');
var_dump($person);
$personArr = (array) $person;
var_dump($personArr);
// when array person converted back to object, will not return to object person again, but will be stdClass
$person2 = (object) $personArr;
var_dump($person2);
