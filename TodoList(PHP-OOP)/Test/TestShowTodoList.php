<?php

require_once __DIR__ . '/../Model/TodoList.php';
require_once __DIR__ . '/../BusinessLogic/ShowTodoList.php';

$todoList[] = 'Belajar PHP Dasar';
$todoList[] = 'Belajar PHP Database';
$todoList[] = 'Belajar PHP OOP';

showTodoList();
