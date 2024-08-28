<?php

namespace PHPDB\Service;

use PHPDB\Entity\TodoList;
use PHPDB\Repository\TodoListRepository;

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
            echo $number . ". {$value->getTodo()}" . PHP_EOL;
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
        echo $this->todoListRepository->remove($number) ?
            'Sukses menghapus TODOLIST' . PHP_EOL :
            'Gagal menghapus TODOLIST ' . $number . PHP_EOL;
    }
}
