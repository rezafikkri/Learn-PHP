<?php

use Data\{AnimalFood, CatShelter, DogShelter, Food};

require_once "data/AnimalShelter.php";

$catShelter = new CatShelter();
$cat = $catShelter->adopt("Kureng");
$cat->eat(new AnimalFood());

$dogShelter = new DogShelter();
$dog = $dogShelter->adopt("Haha");
$dog->eat(new Food());
