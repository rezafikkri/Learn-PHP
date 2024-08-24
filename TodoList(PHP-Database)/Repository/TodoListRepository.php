<?php

namespace PHPDB\Repository;

use PDO;
use PHPDB\Entity\TodoList;

interface TodoListRepository
{
    public function findAll(): array;
    public function save(TodoList $todoList): void;
    public function remove(int $number): bool;
}

class TodoListRepositoryImpl implements TodoListRepository
{
    private $todoLists = [];

    public function __construct(private PDO $dbh)
    {
        
    }

    public function findAll(): array
    {
        return $this->todoLists;
    }

    public function save(TodoList $todoList): void
    {
        $sql = 'INSERT INTO todolist(todo) VALUES(:todo)';
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute([':todo' => $todoList->getTodo()]);
    }

    public function remove(int $number): bool
    {
        if ($number > count($this->todoLists)) return false;

        $removedTodo = array_splice($this->todoLists, $number-1, 1);

        return count($removedTodo) > 0 ? true : false;
    }
}
