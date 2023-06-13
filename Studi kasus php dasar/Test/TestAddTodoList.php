<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";

addTodoList("Reza");
addTodoList("Dian");
addTodoList("Reza");

var_dump($todoList);
