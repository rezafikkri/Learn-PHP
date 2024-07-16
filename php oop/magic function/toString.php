<?php

require_once(__DIR__ . '/../data/Student.php');

use Data\Student;

$student1 = new Student();
$student1->name = 'Reza';
$student1->value = 100;

// $string = (string) $student1;
// var_dump($string);

echo $student1;
