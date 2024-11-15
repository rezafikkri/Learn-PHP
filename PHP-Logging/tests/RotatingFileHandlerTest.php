<?php

namespace RezaFikkri\PHPLogging;

use Monolog\Handler\RotatingFileHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use Monolog\Processor\GitProcessor;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class RotatingFileHandlerTest extends TestCase
{
    #[Test]
    public function rotatingFileHandler(): void
    {
        $log = new Logger(self::class);
        $log->pushHandler(new StreamHandler('php://stderr'));
        $log->pushHandler(new RotatingFileHandler(__DIR__ . '/../rotating.log', 5, Level::Info));
        $log->pushProcessor(new GitProcessor());

        $log->info('Hello World');
        $log->info('Test logging', ['username' => 'rezafikkri']);
        $log->info('Belajar PHP Logging');

        $this->assertNotNull($log);
    }
}
