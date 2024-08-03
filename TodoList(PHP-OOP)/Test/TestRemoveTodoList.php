<?php

require_once __DIR__ . '/../Model/TodoList.php';
require_once __DIR__ . '/../BusinessLogic/AddTodoList.php';
require_once __DIR__ . '/../BusinessLogic/ShowTodoList.php';
require_once __DIR__ . '/../BusinessLogic/RemoveTodoList.php';

addTodoList('Belajar PHP Dasar');
addTodoList('Belajar PHP OOP');
addTodoList('Belajar PHP Database');
addTodoList('Belajar PHP MVC');

showTodoList();

var_dump(removeTodoList(2));

showTodoList();
