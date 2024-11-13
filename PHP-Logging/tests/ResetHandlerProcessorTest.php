<?php

namespace RezaFikkri\PHPLogging;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Processor\GitProcessor;
use Monolog\Processor\MemoryUsageProcessor;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class ResetHandlerProcessorTest extends TestCase
{
    #[Test]
    public function resetHandlerProcessor(): void
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

        for ($i = 0; $i < 10000; $i++) {
            $log->info("Loop $i");
            // setiap 100 kali mengirimkan log event
            if ($i % 100 == 0) {
                $log->reset();
            }
        }

        $this->assertNotNull($log);
    }
}
