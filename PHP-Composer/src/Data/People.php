<?php

namespace RezaFikkri\Data;

class People
{
    public function __construct(private string $name)
    {
    }
    
    public function sayHello(string $name) {
        return "Hello $name, nama saya $this->name";
    }
}
