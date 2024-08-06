<?php

/**
 * Menghapus todo di list
 */
function removeTodoList(int $number): bool
{
    global $todoList;

    if ($number > count($todoList)) return false;

    $removedTodo = array_splice($todoList, $number-1, 1);

    return count($removedTodo) > 0 ? true : false;
}
