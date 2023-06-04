<?php

require_once "Exception/ValidationException.php";
require_once "helper/Validation.php";
require_once "data/LoginRequest.php";

$loginRequest = new LoginRequest();

try {
    $loginRequest->username = "";
    $loginRequest->password = ""; 
    validateLoginRequest($loginRequest);
    echo "VALID";
} catch (Exception | ValidationException $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
    var_dump($e->getTraceAsString());
} finally {
    echo "Error tidak error tetap dipanggil" . PHP_EOL;
}
