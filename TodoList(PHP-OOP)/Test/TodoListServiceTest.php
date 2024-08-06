<?php

require_once __DIR__ . '/../Entity/TodoList.php';
require_once __DIR__ . '/../Repository/TodoListRepository.php';
require_once __DIR__ . '/../Service/TodoListService.php';

use PHPOOP\Entity\TodoList;
use PHPOOP\Repository\TodoListRepositoryImpl;
use PHPOOP\Service\TodoListServiceImpl;

function testShowTodoList(): void
{
    $todoListRepository = new TodoListRepositoryImpl;
    $todoListRepository->save(new TodoList('Belajar PHP Dasar'));
    $todoListRepository->save(new TodoList('Belajar PHP OOP'));

    $todoListService = new TodoListServiceImpl($todoListRepository);

    $todoListService->showTodoList();
}

function testAddTodoList(): void
{
    $todoListRepository = new TodoListRepositoryImpl;
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListService->saveTodoList('Belajar PHP Dasar');
    $todoListService->saveTodoList('Belajar PHP Dasar');

    $todoListService->showTodoList();
}

testAddTodoList();
