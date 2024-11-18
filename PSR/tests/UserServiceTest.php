<?php

namespace RezaFikkri\PSR;

use Monolog\Formatter\JsonFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class UserServiceTest extends TestCase
{
    private UserService $userService;

    protected function setUp(): void
    {
        $log = new Logger(self::class);
        $streamHandler = new StreamHandler('php://stdout', Level::Info);
        $streamHandler->setFormatter(new JsonFormatter());
        $log->pushHandler($streamHandler);

        $this->userService = new UserService($log);
    }

    #[Test]
    public function save(): void
    {
        $save = $this->userService->save('Reza');

        $this->assertTrue($save);
    }
}
