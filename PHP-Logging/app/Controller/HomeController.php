<?php

namespace RezaFikkri\PHPLogging\Controller;

use RezaFikkri\PHPLogging\App\View;

class HomeController
{
    public function index(): void
    {
        // model response
        $response = [
            'title' => 'Belajar PHP PHPLogging',
            'content' => 'Selamat Belajar PHP PHPLogging',
        ];
        View::render('Home/index', $response);
    }

    public function hello(): void
    {
        echo 'HomeController->hello()';
    }

    public function login(): void
    {
        // model request
        $request = [
            'username' => htmlspecialchars($_POST['username']),
            'password' => htmlspecialchars($_POST['password']),
        ];

        $response = [
            'message' => 'Login success',
        ];
    }
}
