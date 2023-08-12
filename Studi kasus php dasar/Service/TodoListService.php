<?php

namespace Service;

interface TodoListService
{
    public function showTodoList(): void;

    public function addTodoList(string $todo): void;

    public function removeTodoList(int $number): void;
}
