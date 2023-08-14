<?php

namespace Service;

use Repository\TodoListRepository;

interface TodoListService
{
    public function showTodoList(): void;
    public function addTodoList(string $todo): void;
    public function removeTodoList(int $number): void;
}

class TodoListServiceImpl implements TodoListService
{
    public function __construct(
        private TodoListRepository $todoListRepository,
    ) {
    }

    public function showTodoList(): void
    {
        
    }

    public function addTodoList(string $todo): void
    {
        
    }

    public function removeTodoList(int $number): void
    {
        echo "TODOLIST" . PHP_EOL;

        foreach ($this->todoListRepository->getAll() as $key => $val) {
            echo "$key. $val" . PHP_EOL;
        }
    }
}
