<?php

namespace Repository;

use Entity\TodoList;

interface TodoListRepository
{
    public function save(TodoList $todoList): void;
    public function remove(int $number): bool;
    public function getAll(): array;
}

class TodoListRepositoryImpl implements TodoListRepository
{
    public array $todoList = [];

    public function save(TodoList $todoList): void
    {
        $number = count($this->todoList) + 1;
        $this->todoList[$number] = $todoList;
    }

    public function remove(int $number): bool
    {
        if ($number < 1 || $number > count($this->todoList)) {
            return false;
        }

        $totalTodoList = count($this->todoList);
        for ($i = $number; $i < $totalTodoList; $i++) {
            $this->todoList[$i] = $this->todoList[$i + 1];
        }

        array_pop($this->todoList);

        return true;
    }

    public function getAll(): array
    {
        return $this->todoList;
    }
}
