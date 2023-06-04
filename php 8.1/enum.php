<?php

require_once "Customer.php";

echo sayHello(new Customer(id: "1", name: "Reza", gender:Gender::from("Mr."))) . PHP_EOL;
echo sayHello(new Customer(id: "2", name: "Dea", gender:Gender::from("Mrs."))) . PHP_EOL;
echo sayHello(new Customer(id: "2", name: "Dea", gender:Gender::tryFrom("Mrs"))) . PHP_EOL;

var_dump(Gender::Male->sayHello());
var_dump(Gender::Female->sayHello());
var_dump(Gender::Male->inIndonesia());

var_dump(Gender::fromIndonesia("Tuan"));
