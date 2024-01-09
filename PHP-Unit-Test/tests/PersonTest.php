<?php

namespace RezaFikkri\PHPUnitTest\Test;

use Exception;
use PHPUnit\Framework\TestCase;
use RezaFikkri\PHPUnitTest\Person;

class PersonTest extends TestCase
{
    private Person $person;

    protected function setUp(): void
    {
        // $this->person = new Person("Reza");
    }
    
    /**
     * @before
     */
    protected function createPerson(): void
    {
        $this->person = new Person("Reza");
    }

    public function testSuccess(): void
    {
        $this->assertEquals("Hello Adel, my name is Reza", $this->person->sayHello("Adel"));
    }

    public function testException(): void
    {
        $this->expectException(Exception::class);
        $this->person->sayHello(null);
    }

    public function testGoodbyeSuccess(): void
    {
        $this->expectOutputString("Goodbye Adel" . PHP_EOL);
        $this->person->sayGoodBye("Adel");
    }
}
