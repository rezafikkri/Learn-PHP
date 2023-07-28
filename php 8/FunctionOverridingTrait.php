<?php

namespace PHP8;

trait SampleTrait
{
    public abstract function sampleFunction(string $name): string;
}

class SampleClass
{
    use SampleTrait;

    public function sampleFunction(string $name): int
    {
        
    }
}
