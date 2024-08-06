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
    public $todoLists = [];

    public function findAll(): array
    {
        return $this->todoLists;
    }

    public function save(TodoList $todoList): void
    {
        
    }

    public function remove(int $number): bool
    {
        
    }
}
