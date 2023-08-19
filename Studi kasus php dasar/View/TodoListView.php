<?php

namespace View;

require_once __DIR__ . "/../Helper/InputHelper.php";

use Helper\InputHelper;
use Service\TodoListService;

class TodoListView
{
    public function __construct(
        private TodoListService $todoListService,
    ) {
    }

    public function showTodoList(): void
    {
        while (true) {
            $this->todoListService->showTodoList();

            echo "MENU" . PHP_EOL;
            echo "1. Tambah Todo" . PHP_EOL;
            echo "2. Hapus Todo" . PHP_EOL;
            echo "x. Keluar" . PHP_EOL;

            $pilihan = InputHelper::input("Pilih");

            if ($pilihan == 1) {
                $this->addTodoList();
            } elseif ($pilihan == 2) {
                $this->removeTodoList();
            } elseif ($pilihan == 'x') {
                // Keluar
                break;
            } else {
                echo "Pilihan tidak dimengerti" . PHP_EOL;
            }
        }

        echo "Sampai jumpa lagi" . PHP_EOL;
    }

    public function addTodoList(): void
    {
        echo "MENAMBAH TODO" . PHP_EOL;

        $todo = InputHelper::input("Todo (x untuk batal)");

        if ($todo == 'x') {
            echo "Batal menambah todo" . PHP_EOL;
        } else {
            $this->todoListService->addTodoList($todo);
        }
    }

    public function removeTodoList(): void
    {
        echo "MENGHAPUS TODO" . PHP_EOL;

        $pilihan = InputHelper::input("Nomor (x untuk batalkan)");

        if ($pilihan == 'x') {
            echo "Batal menghapus todo" . PHP_EOL;
        } else {
            $success = $this->todoListService->removeTodoList($pilihan);
            if ($success) {
                echo "Success Menghapus Todo Nomor $pilihan" . PHP_EOL;
            } else {
                echo "Gagal Menghapus Todo Nomor $pilihan" . PHP_EOL;
            }
        }
    }
}
