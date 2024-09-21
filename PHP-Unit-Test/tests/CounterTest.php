<?php

namespace RezaFikkri\PHPUnit;

use PHPUnit\Framework\Attributes\After;
use PHPUnit\Framework\Attributes\Before;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\RequiresOperatingSystemFamily;
use PHPUnit\Framework\Attributes\RequiresPhp;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{
    private Counter $counter;

    protected function setUp(): void
    {
        echo "SetUp" . PHP_EOL;
        $this->counter = new Counter;
    }

    #[Before()]
    public function before(): void
    {
        echo "Before" . PHP_EOL;
    }

    public function testIncrement(): void
    {
        $this->markTestIncomplete('TODO call increment method');
        $this->assertEquals(0, $this->counter->getCounter());// tidak akan dieksekusi, karena
        // markTestIncomplete melakukan throw error IncompleteTestError
        echo "Test test";
    }

    #[Test]
    public function increment(): void
    {
        $this->markTestSkipped('Masih ada error yang bingung');

        // code dibawah ini tidak akan dieksekusi, karena markTestSkipped melakukan throw error
        // SkippedTestError
        $this->counter->increment();
        $this->assertEquals(1, $this->counter->getCounter());

        $this->counter->increment();
        $this->assertEquals(2, $this->counter->getCounter());

        $this->counter->increment();
        $this->assertEquals(3, $this->counter->getCounter());
    }

    #[RequiresPhp('>=8.3')]
    #[RequiresOperatingSystemFamily('Linux')]
    public function testOnlyWindows(): void
    {
        $this->assertTrue(true, 'Only run in php 8.3 and Linux');
        echo 'Only run in php 8.3 and Linux' . PHP_EOL;
    }

    public function testFirst(): Counter
    {
        $this->counter->increment();

        $this->assertEquals(1, $this->counter->getCounter());

        return $this->counter;
    }

    #[Depends('testFirst')]
    public function testSecond(Counter $counter): void
    {
        $counter->increment();
        $this->assertEquals(2, $counter->getCounter());
    }

    protected function tearDown(): void
    {
        echo "Tear down" . PHP_EOL;
    }

    #[After()]
    public function after(): void
    {
        echo "After" . PHP_EOL;
    }
}
