<?php

namespace RezaFikkri\PHPUnitTest;

class Counter
{
    public function __construct(private int $counter = 0)
    {
    }

    public function increment(): void
    {
        $this->counter++;
    }

    public function getCounter(): int
    {
        return $this->counter;
    }
}
