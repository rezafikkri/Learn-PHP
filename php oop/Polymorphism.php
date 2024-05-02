<?php

require_once "data/Programmer.php";

$company = new \data\Company;
$company->programmer = new \data\Programmer("Reza");
var_dump($company);

$company->programmer = new \data\BackendProgrammer("Reza");
var_dump($company);

\data\sayHello(new \data\Programmer("Reza"));

\data\sayHello(new \data\BackendProgrammer("Dian"));
