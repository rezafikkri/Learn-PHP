<?php

$dateTime = new DateTime();
$dateTime->setDate(2001, 01, 10)->setTime(10, 10, 10, 0);
var_dump($dateTime);

$dateTime->add(new DateInterval("P1Y"));
var_dump($dateTime);

$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = 1;
$dateTime->add($minusOneMonth);
var_dump($dateTime);

$now = new DateTime();
$now->setTimezone(new DateTimeZone("Asia/Tokyo"));
var_dump($now);
