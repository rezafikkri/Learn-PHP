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
            $pattern = "#^$route[path]$#";
            if (preg_match($pattern, $path, $variables) && $httpMethod == $route['httpMethod']) {
                $controller = new $route['controller'];
                // $controller->{$route['method']}();
                array_shift($variables);
                call_user_func_array([$controller, $route['method']], $variables);
                return;
            }
        }

        http_response_code(404);
        echo 'Controller Not Found';
    }
}
