<?php

require_once "Exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "reza";
$loginRequest->password = " ";

// try {
//     validateLoginRequest($loginRequest);
//     echo "Valid" . PHP_EOL;
// } catch (ValidationException | Exception $e) {
//     echo "Error: {$e->getMessage()}" . PHP_EOL;
//     // echo "Error : {$e->getMessage()}" . PHP_EOL;
//
//     var_dump($e->getTrace());
//
//     // echo $e->getTraceAsString() . PHP_EOL;
// } finally {
//     echo "Tetap akan berjalan" . PHP_EOL;
// }

// Using exception handler
function exception_handler(ValidationException | Exception $e) {
    echo "Error: {$e->getMessage()}" . PHP_EOL;
    var_dump($e->getTrace());
    echo $e->getTraceAsString();
}

set_exception_handler('exception_handler');

validateLoginRequest($loginRequest);
