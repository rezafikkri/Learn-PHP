<?php

use Data\{AnimalFood, CatShelter, DogShelter, Food};

require_once "data/AnimalShelter.php";

$catShelter = new CatShelter();
$cat = $catShelter->adopt("Kureng");
var_dump($cat);
$cat->eat(new AnimalFood());

$dogShelter = new DogShelter();
$dog = $dogShelter->adopt("Haha");
var_dump($dog);
$dog->eat(new Food());
