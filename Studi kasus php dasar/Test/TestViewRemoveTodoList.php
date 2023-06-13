<?php

require_once "View/ViewRemoveTodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/ShowTodoList.php";

addTodoList("Reza");
addTodoList("Dea");
addTodoList("Dian");
addTodoList("Dinanti");
addTodoList("Puji");

showTodoList();

viewRemoveTodoList();

showTodoList();
