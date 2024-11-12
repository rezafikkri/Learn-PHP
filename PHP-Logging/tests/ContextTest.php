<?php

namespace RezaFikkri\PHPLogging;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class ContextTest extends TestCase
{
    #[Test]
    public function context(): void
    {
        $log = new Logger(self::class);
        $log->pushHandler(new StreamHandler('php://stderr'));

        $log->info('Success Login', ['username' => 'rezafikkri']);

        $this->assertNotNull($log);
    }
}
