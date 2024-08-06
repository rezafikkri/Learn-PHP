<?php

require_once __DIR__ . '/../BusinessLogic/AddTodoList.php';
require_once __DIR__ . '/../Helper/Input.php';

function viewAddTodoList()
{
    echo 'MENAMBAH TODO.' . PHP_EOL;

    $todo = input('Todo (x untuk batal)');
    
    if ($todo != 'x') {
        addTodoList($todo);
    } else {
        echo 'Batal menambah todo.' . PHP_EOL;
    }
}
