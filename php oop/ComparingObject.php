<?php

require_once('data/Student.php');

use Data\Student;

$student1 = new Student();
$student1->name = 'Reza';
$student1->value = 1;

$student2 = $student1;

$student3 = new Student();
$student3->name = "Reza";
$student3->value = 1;

var_dump($student1 == $student2);
var_dump($student1 === $student2);

var_dump($student1 == $student3);
var_dump($student1 === $student3);
