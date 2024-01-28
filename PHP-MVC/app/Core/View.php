<?php

namespace RezaFikkri\PHPMVC\Core;

class View
{
    public static function render(string $view, array|object $model): void
    {
        extract($model);

        require __DIR__ . '/../View/' . $view . '.php';
    }
}
