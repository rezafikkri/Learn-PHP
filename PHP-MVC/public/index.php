<?php

$path = '/index';

if (isset($_SERVER['PATH_INFO'])) {
    $path = $_SERVER['PATH_INFO'];
}

require_once __DIR__ . '/../app/View' . $path . '.php';
