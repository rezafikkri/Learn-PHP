<?php

$a = ["a" => "Reza", "b" => "Dea"];
$b = ["a" => "Puji", "b" => "Agus", "c" => "Dian"];
var_dump($a + $b); // Union

$a = ["Dea", "Dian"];
$b = [1 => "Dian", 0 => "Dea"];
var_dump($a == $b); // Equality
var_dump($a === $b); // Identity

var_dump($a != $b); // inEquality
var_dump($a !== $b); // inIdentity
