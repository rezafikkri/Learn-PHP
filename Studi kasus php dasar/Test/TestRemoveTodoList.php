<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

addTodoList("Reza");
addTodoList("Puji");
addTodoList("Dea");
addTodoList("Dian");

showTodoList();

removeTodoList(2);

showTodoList();

var_dump(removeTodoList(4));

showTodoList();
