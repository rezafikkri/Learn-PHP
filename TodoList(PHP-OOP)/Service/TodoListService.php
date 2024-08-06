<?php

namespace PHPOOP\Service;

interface TodoListService
{
    public function showTodoList(): void;
    public function saveTodoList(string $todo): void;
    public function removeTodoList(int $number): bool;
}
