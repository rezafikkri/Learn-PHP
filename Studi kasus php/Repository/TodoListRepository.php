<?php

namespace Repository;

use Entity\TodoList;
use PDO;

interface TodoListRepository
{
    public function save(TodoList $todoList): void;
    public function remove(int $number): bool;
    public function getAll(): array;
}

class TodoListRepositoryImpl implements TodoListRepository
{
    public array $todoList = [];

    public function __construct(private PDO $connection)
    {
    }

    public function save(TodoList $todoList): void
    {
        // $number = count($this->todoList) + 1;
        // $this->todoList[$number] = $todoList;
        $sql = "INSERT INTO todolist (todo) VALUES (:todo)";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([":todo" => $todoList->getTodo()]);
    }

    public function remove(int $id): bool
    {
        // if ($number < 1 || $number > count($this->todoList)) {
        //     return false;
        // }

        // $totalTodoList = count($this->todoList);
        // for ($i = $number; $i < $totalTodoList; $i++) {
        //     $this->todoList[$i] = $this->todoList[$i + 1];
        // }

        // array_pop($this->todoList);

        // return true;
        
        $sql = "DELETE FROM todolist WHERE id = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([":id" => $id]);
        return $stmt->rowCount();
    }

    public function getAll(): array
    {
        $sql = "SELECT * FROM todolist";
        $result = [];
        foreach ($this->connection->query($sql) as $todo) {
            $todoList = new TodoList();
            $todoList->setId($todo["id"]);
            $todoList->setTodo($todo["todo"]);
            $result[] = $todoList;
        }
        return $result;
    }
}
