<?php

class ValidationUtil
{
    public static function validate(LoginRequest $request)
    {
        if (!isset($request->username)) {
            throw new ValidationException("Username is null");
        } elseif (!isset($request->password)) {
            throw new ValidationException("Password is null");
        }
    }

    public static function validateReflection($request)
    {
        $reflection = new ReflectionClass($request);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);

        foreach ($properties as $p) {
            if (!$p->isInitialized($request)) {
                throw new ValidationException("$p->name is not set");
            } elseif (is_null($p->getValue($request))) {
                throw new ValidationException("$p->name is null");
            }
        }
    }
}
