<?php

require_once('data/Student.php');

use Data\Student;

$student1 = new Student();
$student1->name = 'Reza';
$student1->value = 100;

$student1('Reza', 22);
