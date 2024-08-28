<?php

namespace PHPDB\Repository;

use PDO;
use PHPDB\Entity\TodoList;

interface TodoListRepository
{
    public function findAll(): iterable;
    public function save(TodoList $todoList): void;
    public function remove(int $number): bool;
}

class TodoListRepositoryImpl implements TodoListRepository
{
    public function __construct(private PDO $dbh)
    {
        
    }

    public function findAll(): iterable
    {
        $sql = 'SELECT * from todolist';
        foreach ($this->dbh->query($sql) as $row) {
            $todolist = new TodoList();
            $todolist->setId($row['id']);
            $todolist->setTodo($row['todo']);
            yield $row['id'] => $todolist;
        }
    }

    public function save(TodoList $todoList): void
    {
        $sql = 'INSERT INTO todolist(todo) VALUES(:todo)';
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute([':todo' => $todoList->getTodo()]);
    }

    public function remove(int $id): bool
    {
        $sql = 'DELETE FROM todolist WHERE id=:id';
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute([':id' => $id]);

        return $stmt->rowCount();
    }
}
