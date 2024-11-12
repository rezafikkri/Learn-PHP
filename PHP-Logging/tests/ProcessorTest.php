<?php

namespace RezaFikkri\PHPLogging;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Processor\GitProcessor;
use Monolog\Processor\MemoryUsageProcessor;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class ProcessorTest extends TestCase
{
    #[Test]
    public function processor(): void
    {
        $log = new Logger(self::class);
        $log->pushHandler(new StreamHandler('php://stderr'));
        $log->pushProcessor(new GitProcessor());
        $log->pushHandler(new StreamHandler(__DIR__ . '/../processorTest.log'));
        $log->pushProcessor(new MemoryUsageProcessor());
        $log->pushProcessor(function ($record) {
            $record->extra['app_version'] = ['v1.0.0'];
            return $record;
        });

        $log->info('Success Login', ['username' => 'rezafikkri']);
        $log->info('Hello World');
        $log->info('Test Test');

        $this->assertNotNull($log);
    }
}
