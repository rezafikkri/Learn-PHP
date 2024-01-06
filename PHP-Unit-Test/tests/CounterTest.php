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

    public function testFirst(): Counter
    {
        $counter = new Counter();
        $counter->increment();
        $this->assertEquals(1, $counter->getCounter());

        return $counter;
    }
    
    /**
     * @depends testFirst
     */
    public function testSecond(Counter $counter): void
    {
        $counter->increment();
        $this->assertEquals(2, $counter->getCounter());
    }
}
