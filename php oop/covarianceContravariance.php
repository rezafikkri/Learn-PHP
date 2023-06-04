<?php

use Data\{AnimalFood, CatShelter, DogShelter, Food};

require_once "Animal.php";
require_once "AnimalShelter.php";
require_once "Food.php";

$catShelter = new CatShelter();
$cat = $catShelter->adopt("Kureng");
$cat->eat(new AnimalFood());

$dogShelter = new DogShelter;
$dog = $dogShelter->adopt("Gero");
$dog->eat(new Food());

var_dump($cat);
