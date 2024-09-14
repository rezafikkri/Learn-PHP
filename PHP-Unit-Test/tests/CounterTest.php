<?php

namespace RezaFikkri\PHPUnit;

use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{
    public function testIncrement(): void
    {
        $counter = new Counter;
        $counter->increment();
        echo $counter->getCounter();
    }
}
