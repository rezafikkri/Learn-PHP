<?php

namespace PHP8;

trait SampleTrait
{
    abstract public function sampleFunction(string $name): string;
}

class SampleClass
{
    use SampleTrait;

    public function sampleFunction(string $name): string
    {
        return "Hello";
    }
}

echo (new SampleClass())->sampleFunction("reza");
