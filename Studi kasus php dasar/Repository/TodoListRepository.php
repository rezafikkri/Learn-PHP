<?php

namespace Repository;

use Entity\TodoList;

interface TodoListRepository
{
    public function save(TodoList $todoList): void;
    public function remove(int $number): bool;
    public function getAll(): array;
}
