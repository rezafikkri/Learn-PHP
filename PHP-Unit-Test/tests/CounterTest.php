<?php

namespace RezaFikkri\PHPUnitTest\Test;

use PHPUnit\Framework\TestCase;
use RezaFikkri\PHPUnitTest\Counter;

class CounterTest extends TestCase
{
    public function testCounter(): void
    {
        $counter = new Counter();
        $counter->increment();
        $counter->increment();
        echo $counter->getCounter() . PHP_EOL;
    }

    public function testOther(): void
    {
        echo "Other";
    }
}
