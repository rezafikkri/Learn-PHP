<?php

$dateTime = new DateTime();
$dateTime->setDate(2001, 01, 10);
$dateTime->setTime(04, 30, 00);

$dateTime->add(new DateInterval("P1Y"));

$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true;

$dateTime->add($minusOneMonth);

// var_dump($dateTime);
$dateTime->setTimezone(new DateTimeZone("Asia/Qatar"));
// var_dump($dateTime);

$now = new DateTime();
// echo $now->format("Y-m-d H:i:s");

$date = DateTime::createFromFormat("Y-m-d H:i:s", "2020-10-10 10:10:10");
var_dump($date);
