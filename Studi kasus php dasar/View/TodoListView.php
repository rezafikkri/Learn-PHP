<?php

namespace View;

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

    }

    public function removeTodoList(): void
    {

    }
}
