<?php

/**
 * Menambah todo ke list
 */
function addTodoList(string $todo)
{
    global $todoList;
    $todoList[] = $todo;
}
