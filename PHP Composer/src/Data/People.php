<?php

namespace PhpComposer\Data;

class People
{
    public function __construct(private string $name)
    {
        
    }

    public function sayHello($name): string
    {
        return "Hello $name My name is $this->name";
    }
}
