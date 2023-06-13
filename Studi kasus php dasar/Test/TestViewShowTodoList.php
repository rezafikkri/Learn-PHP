<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../View/ViewShowTodoList.php";

addTodoList("Reza");
addTodoList("Dea");
addTodoList("Dian");
addTodoList("Dinanti");

viewShowTodoList();
