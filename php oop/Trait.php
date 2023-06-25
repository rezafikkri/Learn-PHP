<?php

require_once "data/SayGoodBye.php";

use Data\Person;

$person = new Person;
$person->goodBye("Reza");

$person->name = "Reza";
$person->run();
