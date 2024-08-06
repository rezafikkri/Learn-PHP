<?php

namespace PHPOOP\Repository;

use PHPOOP\Entity\TodoList;

interface TodoListRepository
{
    public function findAll(): array;
    public function save(TodoList $todoList): void;
    public function remove(int $number): bool;
}

class TodoListRepositoryImpl implements TodoListRepository
{
    private $todoLists = [];

    public function findAll(): array
    {
        return $this->todoLists;
    }

    public function save(TodoList $todoList): void
    {
        $this->todoLists[] = $todoList;
    }

    public function remove(int $number): bool
    {
        if ($number > count($this->todoLists)) return false;

        $removedTodo = array_splice($this->todoLists, $number-1, 1);

        return count($removedTodo) > 0 ? true : false;
    }
}
