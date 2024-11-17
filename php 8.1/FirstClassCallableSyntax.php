<?php

namespace PHP81\FirstClassCallableSyntax;

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

$person = new Person('Reza');
$reference = $person->saySalam(...);
echo $reference('Adel') . PHP_EOL;

$reference2 = strtolower(...);
echo $reference2($reference('Adel')) . PHP_EOL;
