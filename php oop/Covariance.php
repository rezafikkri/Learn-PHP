<?php

require_once "data/AnimalShelter.php";

use Data\{CatShelter, DogShelter};

$catShelter = new CatShelter();
$cat = $catShelter->adopt("Kureng");
var_dump($cat);

$dogShelter = new DogShelter();
$dog = $dogShelter->adopt("Haha");
var_dump($dog);
