<?php

namespace PHPOOP\Service;

use PHPOOP\Entity\TodoList;
use PHPOOP\Repository\TodoListRepository;

interface TodoListService
{
    public function showTodoList(): void;
    public function addTodoList(string $todo): void;
    public function removeTodoList(int $number): void;
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

    public function addTodoList(string $todo): void
    {
        $todoList = new TodoList($todo);
        $this->todoListRepository->save($todoList);

        echo 'Sukses menambah TODOLIST' . PHP_EOL;        
    }

    public function removeTodoList(int $number): void
    {
        if ($this->todoListRepository->remove($number)) {
            echo 'Sukses menghapus TODOLIST' . PHP_EOL;
        } else {
            echo 'Gagal menghapus TODOLIST ' . $number . PHP_EOL;
        }
    }
}
