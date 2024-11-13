<?php

namespace RezaFikkri\PHPLogging;

use Monolog\Formatter\JsonFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Processor\GitProcessor;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class FormatterTest extends TestCase
{
    #[Test]
    public function formatter(): void
    {
        $log = new Logger(self::class);
        $handler = new StreamHandler('php://stderr');
        $handler->setFormatter(new JsonFormatter());

        $log->pushHandler($handler);
        $log->pushProcessor(new GitProcessor());

        $log->info('Hello World');
        $log->info('Test logging', ['username' => 'rezafikkri']);

        $this->assertNotNull($log);
    }
}
