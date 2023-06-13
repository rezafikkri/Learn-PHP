<?php

require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoList()
{
    echo "MENGHAPUS TODO" . PHP_EOL;

    $pilihan = input("Nomor (x untuk batalkan)");

    if ($pilihan == 'x') {
        echo "Batal menghapus todo" . PHP_EOL;
    } else {
        $success = removeTodoList($pilihan);
        if ($success) {
            echo "Success Menghapus Todo Nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal Menghapus Todo Nomor $pilihan" . PHP_EOL;
        }
    }
}
