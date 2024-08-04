<?php

require_once __DIR__ . '/../BusinessLogic/RemoveTodoList.php';
require_once __DIR__ . '/../Helper/Input.php';

function viewRemoveTodoList()
{
    echo 'MENGHAPUS TODOLIST' . PHP_EOL;

    $number = input('Number (x untuk batal)');

    if ($number != 'x') {
        echo removeTodoList($number) ?
            "Sukses menghapus todo nomor $number" . PHP_EOL :
            "Gagal menghapus todo nomor $number" . PHP_EOL;
    } else {
        echo 'Batal menghapus todo.' . PHP_EOL;
    }
}
