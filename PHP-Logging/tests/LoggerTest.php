<?php

namespace RezaFikkri\PHPLogging;

use Monolog\Logger;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class LoggerTest extends TestCase
{
    #[Test]
    public function logger(): void
    {
        // Logger adalah class yang digunakan untuk melakukan logging
        $log = new Logger(LoggerTest::class);
        $this->assertNotNull($log);
    }
}
