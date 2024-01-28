<?php

namespace data;

class Programmer
{
    public function __construct(
        public string $name,
    ) {
        
    }
}

class BackendProgrammer extends Programmer
{

}

class FrontendProgrammer extends Programmer
{

}

class Company
{
    public Programmer $programmer;
}

function sayHello(Programmer $programmer)
{
    if ($programmer instanceof BackendProgrammer) {
        echo "Hallo backend programmer $programmer->name" . PHP_EOL;
    } elseif ($programmer instanceof FrontendProgrammer) {
        echo "Hallo frontend programmer $programmer->name" . PHP_EOL;
    } elseif ($programmer instanceof Programmer)  {
        echo "Hallo programmer $programmer->name" . PHP_EOL;
    }
}
