<?php

namespace Data;

interface HelloWorld
{
    public function helloWorld(): void;
}

$sampleHelloWorld = new class("Reza") implements HelloWorld {
    public function __construct(
        public string $name,
    ) {
        
    }
    public function helloWorld(): void
    {
        echo "Hallo $this->name" . PHP_EOL;
    }
};
$sampleHelloWorld->helloWorld();
