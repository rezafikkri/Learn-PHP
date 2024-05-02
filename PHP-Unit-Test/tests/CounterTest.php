<?php

namespace RezaFikkri\PHPUnitTest\Test;

use PHPUnit\Framework\TestCase;
use RezaFikkri\PHPUnitTest\Counter;

class CounterTest extends TestCase
{
    private Counter $counter;

    protected function setUp(): void
    {
        $this->counter = new Counter();
        // echo "Membuat counter" . PHP_EOL;
    }

    public function testIncrement(): void
    {
        $this->markTestIncomplete("TODO not complete");
        $this->assertEquals(0, $this->counter->getCounter());
    }

    /**
     * @test
     */
    public function increment(): void
    {
        $this->markTestSkipped("Masih ada error");

        $this->counter->increment();
        $this->counter->increment();

        $this->assertEquals(2, $this->counter->getCounter());
    }

    public function testFirst(): Counter
    {
        $this->counter->increment();
        $this->assertEquals(1, $this->counter->getCounter());

        return $this->counter;
    }
    
    /**
     * @depends testFirst
     */
    public function testSecond(Counter $counter): void
    {
        // echo "test second" . PHP_EOL;
        $counter->increment();
        $this->assertEquals(2, $counter->getCounter());
    }

    protected function tearDown(): void
    {
        // echo "Tear down" . PHP_EOL;
    }

    /**
     * @after
     */
    protected function after(): void
    {
        // echo "After" . PHP_EOL;
    }

    /**
     * @requires OSFAMILY Linux
     */
    public function testOnlyWindows(): void
    {
        $this->assertTrue(true, "Only in Windows");
    }

    /**
     * @requires OSFAMILY Linux
     * @requires PHP >= 8.2
     */
    public function testOnlyForLinuxAndPHP82(): void
    {
        $this->assertTrue(true, "Only for linux and PHP >= 8.2");
    }
}
