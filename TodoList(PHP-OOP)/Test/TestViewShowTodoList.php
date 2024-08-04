<?php

require_once __DIR__ . '/../View/ViewShowTodoList.php';
require_once __DIR__ . '/../BusinessLogic/AddTodoList.php';

addTodoList('Belajar PHP Dasar');
addTodoList('Belajar PHP OOP');
addTodoList('Belajar PHP Database');

ViewShowTodoList();
