<?php

namespace RezaFikkri\PHPUnit;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{
    #[Test]
    public function increment(): void
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
