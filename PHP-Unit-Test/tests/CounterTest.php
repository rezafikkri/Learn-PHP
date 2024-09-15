<?php

namespace RezaFikkri\PHPUnit;

use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{
    public function testIncrement(): void
    {
        $counter = new Counter;

        $counter->increment();
        $this->assertEquals(1, $counter->getCounter());

        $counter->increment();
        $this->assertEquals(2, $counter->getCounter());

        $counter->increment();
        $this->assertEquals(3, $counter->getCounter());
    }
}
