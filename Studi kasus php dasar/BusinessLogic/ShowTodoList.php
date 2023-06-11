<?php

/**
 * Menampilkan todo di list
 */
function showTodoList()
{
    global $todoList;

    echo "TODOLIST" . PHP_EOL;

    foreach ($todoList as $key => $val) {
        echo "$key. $val" . PHP_EOL;
    }
}
