<?php

namespace PHP8;

use Stringable;

function hahaHoho(Stringable $stringable)
{
    echo "Hello {$stringable->__toString()}" . PHP_EOL;
}

class Person
{
    public function __toString()
    {
        return "Person";
    }
}

hahaHoho(new Person);
