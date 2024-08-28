<?php

namespace PHPDB\Entity;

class TodoList
{
    private int $id;

    public function __construct(
        private string $todo = '',
    ) {
        
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
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
