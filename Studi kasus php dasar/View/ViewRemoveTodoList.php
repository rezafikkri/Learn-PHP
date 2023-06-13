<?php

require_once "Model/TodoList.php";
require_once "Helper/Input.php";
require_once "BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoList()
{
    echo "MENGHAPUS TODO" . PHP_EOL;

    $pilihan = input("Nomor (x untuk batalkan)");

    if ($pilihan == 'x') {
        echo "Batal menghapus todo";
    } else {
        $success = removeTodoList($pilihan);
        if ($success) {
            echo "Success Menghapus Todo Nomor $pilihan";
        } else {
            echo "Success Menghapus Todo Nomor $pilihan";
        }
    }
}
