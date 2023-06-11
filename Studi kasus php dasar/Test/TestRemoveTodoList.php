<?php

require_once "Model/TodoList.php";
require_once "BusinessLogic/ShowTodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/RemoveTodoList.php";

addTodoList("Reza");
addTodoList("Puji");
addTodoList("Dea");
addTodoList("Dian");

showTodoList();

removeTodoList(2);

showTodoList();

var_dump(removeTodoList(4));

showTodoList();
