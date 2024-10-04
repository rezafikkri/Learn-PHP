<?php

namespace RezaFikkri\MVC\App;

class Router
{
    private static array $routes = [];

    public static function add(
        string $httpMethod,
        string $path,
        string $controller,
        string $method,
    ): void {
        self::$routes[] = [
            'httpMethod' => $httpMethod,
            'path' => $path,
            'controller' => $controller,
            'method' => $method,
        ];
    }

    public static function run(): void
    {
        $path = '/';
        if (isset($_SERVER['PATH_INFO'])) $path = $_SERVER['PATH_INFO'];
        $httpMethod = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes as $route) {
            if ($path == $route['path'] && $httpMethod == $route['httpMethod']) {
                echo "Controller: $route[controller], Method: $route[method]";
                return;
            }
        }

        http_response_code(404);
        echo 'Controller Not Found';
    }
}
