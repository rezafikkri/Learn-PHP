<?php

require_once("data/Student.php");

use Data\Student;

$student1 = new Student();
$student1->name = 'Reza';
$student1->age = 22;
$student1->value = 100;
$student1->setSample("XXX");

$student2 = clone $student1;

var_dump($student1);
var_dump($student2);
