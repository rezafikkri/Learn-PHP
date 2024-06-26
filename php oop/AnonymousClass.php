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
        return; // this is not error and echo bellow not be execute
        // return null or any date type, will be error
        echo "Hallo $this->name" . PHP_EOL;
    }
};
$sampleHelloWorld->helloWorld();
