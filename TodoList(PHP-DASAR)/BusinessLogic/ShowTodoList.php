<?php

/**
 * Menampilkan todo di list
 */
function showTodoList()
{
    global $todoList;

    echo 'TODOLIST' . PHP_EOL;

    foreach ($todoList as $number => $value) {
        echo $number+1 . ". $value" . PHP_EOL;
    }
}
