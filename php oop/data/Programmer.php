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
    echo "Hallo programmer $programmer->name" . PHP_EOL;
}
