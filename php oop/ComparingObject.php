<?php

require_once('Student.php');

$student1 = new Student();
$student1->id = '1';
$student1->nama = 'Reza';
$student1->value = 1;

$student2 = new Student();
$student2->id = '1';
$student2->nama = 'Reza';
$student2->value = 1;

var_dump($student1 == $student2);
