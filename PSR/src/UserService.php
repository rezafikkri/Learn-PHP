<?php

namespace RezaFikkri\PSR;

use Psr\Log\LoggerInterface;

class UserService
{
    public function __construct(
        private LoggerInterface $logger,
    ) {
        
    }

    public function save(string $name): bool
    {
        $this->logger->info("User $name is set.");
        return true;
    }
}
