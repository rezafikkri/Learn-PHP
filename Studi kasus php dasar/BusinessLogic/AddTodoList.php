<?php

/**
 * Menambah todo ke list
 */
function addTodoList(string $todo)
{
    global $todoList;

    $number = count($todoList) + 1;
    $todoList[$number] = $todo;
}
