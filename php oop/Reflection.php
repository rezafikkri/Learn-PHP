<?php

require_once "Exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest();
// ValidationUtil::validate($request);

$request->username = "reza";
$request->password = "reza";
ValidationUtil::validateReflection($request);

class RegisterUserRequest
{
    public ?string $name;
    public ?string $email;
    public ?string $address;
}

$register = new RegisterUserRequest();

ValidationUtil::validateReflection($register);
