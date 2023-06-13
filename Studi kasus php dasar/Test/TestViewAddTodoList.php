<?php

require_once "View/ViewAddTodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/ShowTodoList.php";

addTodoList("Reza");
addTodoList("Dea");
addTodoList("Dian");
addTodoList("Dinanti");

viewAddTodoList();

showTodoList();
