<?php

/**
 * Menghapus todo di list
 */
function removeTodoList(int $number): bool
{
    global $todoList;

    if ($number < 1 || $number > count($todoList)) {
        return false;
    }
    
    $totalTodoList = count($todoList);
    for ($i = $number; $i < $totalTodoList; $i++) {
        $todoList[$i] = $todoList[$i + 1];
    }

    array_pop($todoList);

    return true;
}
