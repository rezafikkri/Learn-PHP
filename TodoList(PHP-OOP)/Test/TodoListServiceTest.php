<?php

require_once __DIR__ . '/../Entity/TodoList.php';
require_once __DIR__ . '/../Repository/TodoListRepository.php';
require_once __DIR__ . '/../Service/TodoListService.php';

use PHPOOP\Repository\TodoListRepositoryImpl;
use PHPOOP\Service\TodoListServiceImpl;

function testShowTodoList(): void
{
    $todoListRepository = new TodoListRepositoryImpl;
    $todoListRepository->todoLists[] = 'Belajar PHP Dasar';
    $todoListRepository->todoLists[] = 'Belajar PHP OOP';

    $todoListService = new TodoListServiceImpl($todoListRepository);

    $todoListService->showTodoList();
}

testShowTodoList();
