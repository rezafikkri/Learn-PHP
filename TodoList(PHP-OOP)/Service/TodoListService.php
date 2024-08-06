<?php

namespace PHPOOP\Service;

use PHPOOP\Entity\TodoList;
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
            echo $number+1 . ". {$value->getTodo()}" . PHP_EOL;
        }
    }

    public function saveTodoList(string $todo): void
    {
        $todoList = new TodoList($todo);
        $this->todoListRepository->save($todoList);

        echo 'Sukses menambah TODOLIST' . PHP_EOL;        
    }

    public function removeTodoList(int $number): bool
    {
        
    }
}
