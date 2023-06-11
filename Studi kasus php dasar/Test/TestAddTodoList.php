<?php

require_once "Model/TodoList.php";
require_once "BusinessLogic/AddTodoList.php";

addTodoList("Reza");
addTodoList("Dian");
addTodoList("Reza");

var_dump($todoList);
