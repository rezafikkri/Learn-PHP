<?php

require_once '../BusinessLogicShowTodoList.php';
require_once '../Helper/Input.php';

function viewShowTodoList()
{
    while (true) {
        showTodoList();

        echo "Menu :
            \t1. Tambah Todo\n
            \t2. Hapus Todo\n
            \tx. Keluar" . PHP_EOL;

        $pilihan = input('Pilih');

        switch ($pilihan) {
            case '1':
                viewAddTodoList();
                break;
            case '2':
                viewRemoveTodoList();
                break;
            case 'x':
                break 2;
            default:
                echo 'Pilihan tidak dimengerti' . PHP_EOL;
        }
    }

    echo 'Sampai jumpa lagi' . PHP_EOL;
}
