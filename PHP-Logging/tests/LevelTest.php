<?php

namespace RezaFikkri\PHPLogging;

use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class LevelTest extends TestCase
{
    #[Test]
    public function level(): void
    {
        $log = new Logger(self::class);
        $log->pushHandler(new StreamHandler('php://stdout'));// diconsole kirimkan semua level log
        $log->pushHandler(new StreamHandler(__DIR__ . '/../app.log'));// di file app.log kirimkan semua level log
        $log->pushHandler(new StreamHandler(__DIR__ . '/../error.log', Level::Error)); // sedangkan di file
        // error.log kirimkan hanya log mulai dari level Error ke atas, sedangkan
        // yang dibawah level Error tidak akan dikirimkan ke file error.log

        $log->debug('Debug Log');
        $log->info('Info Log');
        $log->notice('Notice Log');
        $log->warning('Warning Log');
        $log->error('Error Log');
        $log->critical('Critical Log');
        $log->alert('Alert Log');
        $log->emergency('Emergency Log');

        $this->assertNotNull($log);
    }
}
