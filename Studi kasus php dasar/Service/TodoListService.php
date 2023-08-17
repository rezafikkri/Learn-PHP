<?php

namespace Service;

use Entity\TodoList;
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
        echo "TODOLIST" . PHP_EOL;

        foreach ($this->todoListRepository->getAll() as $key => $val) {
            echo "$key. {$val->getTodo()}" . PHP_EOL;
        } 
    }

    public function addTodoList(string $todo): void
    {
        $todoList = new TodoList($todo);
        $this->todoListRepository->save($todoList);
        echo "Sucess menambah todolist" . PHP_EOL;
    }

    public function removeTodoList(int $number): void
    {
    }
}
