<?php

namespace PHP81;

class Person
{
    public function __construct(
        public string $name,
    ) {
    }

    public function saySalam(string $name): string
    {
        return "Assalamualaikum $name, my name is $this->name";
    }
}

$person = new Person("Reza");

$salam = $person->saySalam(...);

echo $salam("Adel") . PHP_EOL;

$contains = str_contains(...);
var_dump($contains("Reza Sariful Fikri", "Sari"));
