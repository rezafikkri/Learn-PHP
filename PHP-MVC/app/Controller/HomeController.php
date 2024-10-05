<?php

namespace RezaFikkri\MVC\Controller;

class HomeController
{
    public function index(): void
    {
        // model response
        $response = [
            'title' => 'Belajar PHP MVC',
            'content' => 'Selamat Belajar PHP MVC',
        ];
        echo 'HomeController->index()';
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
