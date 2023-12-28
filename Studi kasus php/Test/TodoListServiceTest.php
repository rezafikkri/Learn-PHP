<?php

require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";
require_once __DIR__ . "/../Config/Database.php";

use Config\Database;
use Entity\TodoList;
use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;

function testShowTodoList(): void
{
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListRepository->todoList[1] = new TodoList("Belajar PHP");
    $todoListRepository->todoList[2] = new TodoList("Belajar PHP OOP");
    $todoListRepository->todoList[3] = new TodoList("Belajar PHP Database");

    $todoListService = new TodoListServiceImpl($todoListRepository);
    
    $todoListService->showTodoList();
}

function testAddTodoList(): void
{
    $dbh = Database::getConnection();
    $todoListRepository = new TodoListRepositoryImpl($dbh);

    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar PHP OOP");
    $todoListService->addTodoList("Belajar PHP Database");
    
    //$todoListService->showTodoList();

    $dbh = null;
}

function testRemoveTodoList(): void
{
    $dbh = Database::getConnection();
    $todoListRepository = new TodoListRepositoryImpl($dbh);

    $todoListService = new TodoListServiceImpl($todoListRepository);
    
    echo $todoListService->removeTodoList(2) . PHP_EOL;
    echo $todoListService->removeTodoList(5) . PHP_EOL;
}

testRemoveTodoList();
