<?php

if (isset($_GET['key']) && $_GET['key'] === 'rahasia') {
    header("Content-Disposition: attachment; filename=profile.jpg");
    header("Content-Type: image/jpeg");
    readfile(__DIR__ . "/image/34459deae6c28317d228.jpg");
    exit;
} else {
    echo "Invalid key";
}
