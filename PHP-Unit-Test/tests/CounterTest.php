<?php

namespace RezaFikkri\PHPUnitTest\Test;

use PHPUnit\Framework\TestCase;
use RezaFikkri\PHPUnitTest\Counter;

class CounterTest extends TestCase
{
    /**
     * @test
     */
    public function increment(): void
    {
        $counter = new Counter();
        $counter->increment();
        $counter->increment();

        $this->assertEquals(2, $counter->getCounter());
    }
}
