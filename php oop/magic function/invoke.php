<?php

require_once(__DIR__ . '/../data/Student.php');

use Data\Student;

$student1 = new Student();
$student1->name = 'Reza';
$student1->value = 100;
$student1->setSample("haha");

$student1('Reza', 22, true, false);
