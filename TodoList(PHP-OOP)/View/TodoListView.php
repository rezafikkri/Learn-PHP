<?php

namespace PHPOOP\View;

use PHPOOP\Helper\InputHelper;
use PHPOOP\Service\TodoListService;

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

            echo "Menu" . PHP_EOL;
            echo "1. Tambah Todo" . PHP_EOL;
            echo "2. Hapus Todo" . PHP_EOL;
            echo "x. Keluar" . PHP_EOL;

            $pilihan = InputHelper::input('Pilih');

            switch ($pilihan) {
                case '1':
                    $this->addTodoList();
                    break;
                case '2':
                    $this->removeTodoList();
                    break;
                case 'x':
                    break 2;
                default:
                    echo 'Pilihan tidak dimengerti' . PHP_EOL;
            }
        }

    echo 'Sampai jumpa lagi' . PHP_EOL;

    }

    public function addTodoList(): void
    {
        echo 'MENAMBAH TODO.' . PHP_EOL;

        $todo = InputHelper::input('Todo (x untuk batal)');

        if ($todo != 'x') {
            $this->todoListService->addTodoList($todo);
        } else {
            echo 'Batal menambah todo.' . PHP_EOL;
        }

    }

    public function removeTodoList(): void
    {
        echo 'MENGHAPUS TODOLIST' . PHP_EOL;

        $number = InputHelper::input('Number (x untuk batal)');

        if ($number != 'x') {
            $this->todoListService->removeTodoList($number);
        } else {
            echo 'Batal menghapus todo.' . PHP_EOL;
        }

    }
}
