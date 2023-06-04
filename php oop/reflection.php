<?php

require_once "Exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = "Reza";
$request->password = "Rahasia";

ValidationUtil::validateReflection($request);
