<?php

namespace PhpComposer\Data;

class Programmer extends People
{
    public function __construct(
        string $name,
        public string $job,
    ) {
        parent::__construct($name);
    }
}
