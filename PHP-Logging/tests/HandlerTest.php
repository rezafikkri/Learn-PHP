<?php

namespace RezaFikkri\PHPLogging;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class HandlerTest extends TestCase
{
    #[Test]
    public function handler(): void
    {
        $log = new Logger(self::class);
        $log->pushHandler(new StreamHandler('php://stderr'));
        $log->pushHandler(new StreamHandler(__DIR__ . '/../phplogging.log'));

        $this->assertEquals(2, count($log->getHandlers()));
    }
}
