<?php

require_once "data/SayGoodBye.php";

use Data\Person;
use Data\Reza;

$person = new Person;
$person->goodBye("Reza");

$person->name = "Reza";
$person->run();

$reza = new Reza;
$reza->morningInReza();
