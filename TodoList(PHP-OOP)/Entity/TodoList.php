<?php

namespace PHPOOP\Entity;

class TodoList
{
    public function __construct(
        private string $todo = '',
    ) {
        
    }

    public function getTodo(): string
    {
        return $this->todo;
    }

    public function setTodo(string $todo): void
    {
        $this->todo = $todo;
    }
}
