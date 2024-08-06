<?php

require_once __DIR__ . '/../Entity/TodoList.php';
require_once __DIR__ . '/../Repository/TodoListRepository.php';
require_once __DIR__ . '/../Service/TodoListService.php';
require_once __DIR__ . '/../Helper/InputHelper.php';
require_once __DIR__ . '/../View/TodoListView.php';

use PHPOOP\Repository\TodoListRepositoryImpl;
use PHPOOP\Service\TodoListServiceImpl;
use PHPOOP\View\TodoListView;

function testViewShowTodoList()
{
    $todoListRepository = new TodoListRepositoryImpl;
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListView = new TodoListView($todoListService);

    $todoListService->addTodoList('Belajar PHP Dasar');
    $todoListService->addTodoList('Belajar PHP OOP');
    $todoListService->addTodoList('Belajar PHP Database');

    $todoListView->showTodoList();
}

testViewShowTodoList();
