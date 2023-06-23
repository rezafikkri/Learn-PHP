<?php

require_once "data/Car.php";

use Data\{MitsubitshiLancer, HondaCivic};

$mitsubitshiLancer = new MitsubitshiLancer;
$mitsubitshiLancer->name = "Mitsubitshi Lancer";
$mitsubitshiLancer->run();

$hondaCivic = new HondaCivic;
$hondaCivic->name = "Honda Civic";
$hondaCivic->run();
