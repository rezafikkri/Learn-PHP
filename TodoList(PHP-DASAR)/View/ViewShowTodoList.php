<?php

require_once __DIR__ . '/../BusinessLogic/ShowTodoList.php';
require_once __DIR__ . '/../View/ViewAddTodoList.php';
require_once __DIR__ . '/../View/ViewRemoveTodoList.php';
require_once __DIR__ . '/../Helper/Input.php';

function viewShowTodoList()
{
    while (true) {
        showTodoList();

        echo "Menu" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

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
