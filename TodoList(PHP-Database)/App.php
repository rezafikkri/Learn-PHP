<?php

require_once __DIR__ . '/Entity/TodoList.php';
require_once __DIR__ . '/Config/Database.php';
require_once __DIR__ . '/Repository/TodoListRepository.php';
require_once __DIR__ . '/Service/TodoListService.php';
require_once __DIR__ . '/Helper/InputHelper.php';
require_once __DIR__ . '/View/TodoListView.php';

use PHPDB\Config\Database;
use PHPDB\Repository\TodoListRepositoryImpl;
use PHPDB\Service\TodoListServiceImpl;
use PHPDB\View\TodoListView;

$dbh = Database::getConnection();
$todoListRepository = new TodoListRepositoryImpl($dbh);
$todoListService = new TodoListServiceImpl($todoListRepository);
(new TodoListView($todoListService))->showTodoList();
