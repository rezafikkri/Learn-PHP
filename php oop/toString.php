<?php

require_once('Student.php');

$student1 = new Student();
$student1->id = '1';
$student1->nama = 'Reza';
$student1->value = 100;

$string = $student1;
var_dump($string);
