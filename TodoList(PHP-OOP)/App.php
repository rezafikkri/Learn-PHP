<?php

require_once __DIR__ . '/Entity/TodoList.php';
require_once __DIR__ . '/Repository/TodoListRepository.php';
require_once __DIR__ . '/Service/TodoListService.php';
require_once __DIR__ . '/Helper/InputHelper.php';
require_once __DIR__ . '/View/TodoListView.php';

use PHPOOP\Repository\TodoListRepositoryImpl;
use PHPOOP\Service\TodoListServiceImpl;
use PHPOOP\View\TodoListView;

$todoListRepository = new TodoListRepositoryImpl;
$todoListService = new TodoListServiceImpl($todoListRepository);
(new TodoListView($todoListService))->showTodoList();
