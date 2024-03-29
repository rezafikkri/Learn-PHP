<?php

namespace Service;

require_once __DIR__ . "/../Entity/TodoList.php";

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

        foreach ($this->todoListRepository->getAll() as $val) {
            echo "{$val->getId()}. {$val->getTodo()}" . PHP_EOL;
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
        if ($this->todoListRepository->remove($number)) {
            echo "Success menghapus todolist" . PHP_EOL;
        } else {
            echo "Gagal menghapus todolist" . PHP_EOL;
        }
    }
}
