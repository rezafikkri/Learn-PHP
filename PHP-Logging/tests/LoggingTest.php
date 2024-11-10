<?php

namespace RezaFikkri\PHPLogging;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class LoggingTest extends TestCase
{
    #[Test]
    public function logging(): void
    {
        // setup log (create logger dan add log handler)
        $log = new Logger(self::class);
        $log->pushHandler(new StreamHandler('php://stdout'));
        // $log->pushHandler(new StreamHandler(__DIR__ . '/../phplogging.log'));

        $log->info('Belajar PHP Logging');
        $log->info('Hello Logging');
        $log->info('Ini informasi Logging');

        $this->assertNotNull($log);
    }
}
