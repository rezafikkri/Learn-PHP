<?php

#[Attribute]
class NotBlank {}

#[Attribute(Attribute::TARGET_PROPERTY)]
class Length
{
    public int $min;
    public int $max;

    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
    }
}

class LoginRequest
{
    #[Length(min: 4, max: 10)]
    #[NotBlank]
    public string $username;

    #[NotBlank]
    #[Length(min: 8, max: 10)]
    public string $password;
}

function validate(object $object): void
{
    $class = new ReflectionClass($object);
    $properties = $class->getProperties();
    foreach ($properties as $p) {
        validateNotBlank($p, $object);
        validateLength($p, $object);
    }
}

function validateNotBlank(ReflectionProperty $property, object $object)
{
    $attributes = $property->getAttributes(NotBlank::class);
    if (count($attributes) > 0) {
        if (!$property->isInitialized($object)) {
            throw new Exception("Property $property->name is not initialized");
        } else if ($property->getValue($object) == null) {
            throw new Exception("Property $property->name is null");
        }
    }
}

function validateLength(ReflectionProperty $property, object $object)
{
    $valueLength = strlen($property->getValue($object));
    $attributes = $property->getAttributes(Length::class);
    foreach ($attributes as $a) {
        $length = $a->newInstance();
        if ($valueLength < $length->min) {
            throw new Exception("Property $property->name is too short");
        } else if ($valueLength > $length->max) {
            throw new Exception("Property $property->name is too long");
        }
    }
}

$request = new LoginRequest();
$request->username = 'reza';
$request->password = 'reza1234';
validate($request);
