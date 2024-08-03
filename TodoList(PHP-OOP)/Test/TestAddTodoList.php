<?php

require_once __DIR__ . '/../Model/TodoList.php';
require_once __DIR__ . '/../BusinessLogic/AddTodoList.php';

addTodoList('Belajar PHP Dasar');
addTodoList('Belajar PHP OOP');
addTodoList('Belajar PHP Database');

var_dump($todoList);
