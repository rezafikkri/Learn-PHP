<?php

require_once __DIR__ . '/../View/ViewAddTodoList.php';
require_once __DIR__ . '/../BusinessLogic/AddTodoList.php';
require_once __DIR__ . '/../BusinessLogic/ShowTodoList.php';

addTodoList('Belajar PHP Dasar');
addTodoList('Belajar PHP OOP');
addTodoList('Belajar PHP Database');

viewAddTodoList();

showTodoList();
