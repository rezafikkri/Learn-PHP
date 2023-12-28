<?php

require_once __DIR__ . "/Repository/TodoListRepository.php";
require_once __DIR__ . "/Service/TodoListService.php";
require_once __DIR__ . "/View/TodoListView.php";
require_once __DIR__ . "/Config/Database.php";

use Config\Database;
use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;
use View\TodoListView;

echo "Aplikasi todolist" . PHP_EOL;

$dbh = Database::getConnection();
$todoListRepository = new TodoListRepositoryImpl($dbh);
$todoListService = new TodoListServiceImpl($todoListRepository);
$todoListView = new TodoListView($todoListService);

$todoListView->showTodoList();
