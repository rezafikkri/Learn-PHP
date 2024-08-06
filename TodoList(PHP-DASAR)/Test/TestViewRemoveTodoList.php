<?php

require_once __DIR__ . '/../Model/TodoList.php';
require_once __DIR__ . '/../View/ViewRemoveTodoList.php';
require_once __DIR__ . '/../BusinessLogic/AddTodoList.php';
require_once __DIR__ . '/../BusinessLogic/ShowTodoList.php';

addTodoList('Belajar PHP Dasar');
addTodoList('Belajar PHP OOP');
addTodoList('Belajar PHP Database');

showTodoList();

viewRemoveTodoList();

showTodoList();
