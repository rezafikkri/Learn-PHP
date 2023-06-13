<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";

addTodoList("Reza");
addTodoList("Dea");
addTodoList("Dian");
addTodoList("Dinanti");
addTodoList("Puji");

showTodoList();

viewRemoveTodoList();

showTodoList();
