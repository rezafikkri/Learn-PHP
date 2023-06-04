<?php

function sayHello(Stringable $stringable)
{
    echo "Hello" . $stringable->__toString() . PHP_EOL;
}

class Person
{
    public function __toString(): string
    {
        return "Person";
    }
}

SayHello(new Person);
