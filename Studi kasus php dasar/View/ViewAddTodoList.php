<?php

require_once "Model/TodoList.php";
require_once "Helper/Input.php";
require_once "BusinessLogic/AddTodoList.php";

function viewAddTodoList()
{
    echo "Menambah Todo" . PHP_EOL;

    $todo = input("Todo (x untuk batal)");

    if ($todo == 'x') {
        // batal
    } else {
        addTodoList($todo);
    }
}
