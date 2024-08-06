<?php

namespace PHPOOP\Service;

use PHPOOP\Repository\TodoListRepository;

interface TodoListService
{
    public function showTodoList(): void;
    public function saveTodoList(string $todo): void;
    public function removeTodoList(int $number): bool;
}

class TodoListServiceImpl implements TodoListService
{
    public function __construct (
        private TodoListRepository $todoListRepository,
    ) {

    }

    public function showTodoList(): void
    {
        echo 'TODOLIST' . PHP_EOL;

        foreach ($this->todoListRepository->findAll() as $number => $value) {
            echo $number+1 . ". $value" . PHP_EOL;
        }
    }

    public function saveTodoList(string $todo): void
    {
        
    }

    public function removeTodoList(int $number): bool
    {
        
    }
}
