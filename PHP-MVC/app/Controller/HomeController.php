<?php

namespace RezaFikkri\PHPMVC\Controller;

class HomeController
{
    public function index(): void
    {
        $model = [
            'title' => 'Belajar PHP MVC',
            'content' => 'Selamat belajar PHP MVC'
        ];
        echo "HomeController::index()";
    }

    public function hello(): void
    {
        echo "HomeController::hello()";
    }

    public function login(): void
    {
        $request = [
            'username' => $_POST['username'],
            'password' => $_POST['password']
        ];

        $response = [
            'message' => 'Login success'
        ];
    }
}
