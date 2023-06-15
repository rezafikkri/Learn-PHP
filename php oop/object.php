<?php

require_once "properties.php";

$person = new \properties\Person();
$person->name = "Reza";

/* var_dump($person);

echo "Nama : $person->name"; */

$person->sayHello();
