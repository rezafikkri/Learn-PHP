<?php

namespace RezaFikkri\PHPUnitTest\Test;

use PHPUnit\Framework\TestCase;
use RezaFikkri\PHPUnitTest\Counter;

class CounterStaticTest extends TestCase
{
    private static Counter $counter;

    public static function setUpBeforeClass(): void
    {
        static::$counter = new Counter();
    }

    public function testFirst(): void
    {
        static::$counter->increment();
        static::assertEquals(1, static::$counter->getCounter());
    }

    public function testSecond(): void
    {
        static::$counter->increment();
        static::assertEquals(2, static::$counter->getCounter());
    }

    public static function tearDownAfterClass(): void
    {
        echo "Unit test selesai" . PHP_EOL;
    }
}
