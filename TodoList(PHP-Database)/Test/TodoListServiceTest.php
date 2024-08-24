<?php

require_once __DIR__ . '/../Entity/TodoList.php';
require_once __DIR__ . '/../Config/Database.php';
require_once __DIR__ . '/../Repository/TodoListRepository.php';
require_once __DIR__ . '/../Service/TodoListService.php';

use PHPDB\Config\Database;
use PHPDB\Entity\TodoList;
use PHPDB\Repository\TodoListRepositoryImpl;
use PHPDB\Service\TodoListServiceImpl;

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
    $dbh = Database::getConnection();
    $todoListRepository = new TodoListRepositoryImpl($dbh);
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListService->addTodoList('Belajar PHP Dasar');
    $todoListService->addTodoList('Belajar PHP Dasar');

    $todoListService->showTodoList();
}

function testRemoveTodoList(): void
{
    $dbh = Database::getConnection();
    $todoListRepository = new TodoListRepositoryImpl($dbh);
    $todoListService = new TodoListServiceImpl($todoListRepository);

    $todoListService->removeTodoList(0);
    $todoListService->removeTodoList(2);
}

testRemoveTodoList();
