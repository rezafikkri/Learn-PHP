<?php

namespace RezaFikkri\PHPMVC\Core;

class Router
{
    private static array $routes = [];

    /**
     * Method for add route to routes
     *
     * @param string $method HTTP method, ex. POST, GET
     * @param string $path path in url, ex. /login
     * @param string $controller controller name for load
     * @param string $function method name in controller for load
     *
     * @return void
     */
    public static function add(
        string $method,
        string $path,
        string $controller,
        string $function
    ): void {
        static::$routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function
        ];
    }

    /**
     * Method for run Router class
     */
    public static function run(): void
    {
        $path = '/';
        if (isset($_SERVER['PATH_INFO'])) $path = $_SERVER['PATH_INFO'];
        $method = $_SERVER['REQUEST_METHOD'];

        foreach (static::$routes as $route) {
            if ($path == $route['path'] && $method == $route['method']) {
                echo "Controller: " . $route['controller'] . ", Method: " . $route['function'];
                return;
            }
        }

        http_response_code(404);
        echo "CONTROLLER NOT FOUND";
    }
}
