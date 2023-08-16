<?php

require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";

use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;

function testShowTodoList(): void
{
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListRepository->todoList[1] = "Belajar PHP";
    $todoListRepository->todoList[2] = "Belajar PHP OOP";
    $todoListRepository->todoList[3] = "Belajar PHP Database";

    $todoListService = new TodoListServiceImpl($todoListRepository);
    
    $todoListService->showTodoList();
}

testShowTodoList();
