<?php

require_once "data/Manager.php";

$reza = new Manager("Reza");
$dian = new VicePresident("Dian");

$reza->sayHello("Dea");
$dian->sayHello("Dea");
