<?php

namespace PHP8;

use Attribute;
use Exception;
use ReflectionClass;
use ReflectionProperty;

#[Attribute(Attribute::TARGET_PROPERTY)] // will error when call ReflectionAttribute::newInstance()
class NotBlank
{

}

#[Attribute(Attribute::TARGET_PROPERTY)]
class Length
{
    public function __construct(
        public int $min,
        public int $max,
    ) {
        
    }
}

class LoginRequest
{
    #[NotBlank]
    #[Length(min: 4, max: 5)]
    public ?string $username;

    #[NotBlank]
    #[Length(max: 5, min: 4)]
    public ?string $password;
}

function validate(object $object): void
{
    $class = new ReflectionClass($object);
    $properties = $class->getProperties();
    foreach ($properties as $property) {
        $attributes = $property->getAttributes();
        foreach ($attributes as $attribute) {
            switch ($attribute->getName()) {
                case NotBlank::class:
                    validateNotBlank($property, $object);
                    break;
                case Length::class:
                    validateLength($property, $object, $attribute->newInstance());
                    break;
            }
        }
    }
}

function validateNotBlank(ReflectionProperty $property, object $object): void
{
    if (!$property->isInitialized($object)) {
        throw new Exception("Property $property->name is not initialized");
    } elseif (is_null($property->getValue($object))) {
        throw new Exception("Property $property->name is null");
    }
}

function validateLength(ReflectionProperty $property, object $object, Length $attribute): void
{
    if (!$property->isInitialized($object) || is_null($property->getValue($object))) {
        return; // cancel validation
    }

    $value = $property->getValue($object);
    if (strlen($value) < $attribute->min) {
        throw new Exception("Property $property->name is too short");
    } elseif (strlen($value) > $attribute->max) {
        throw new Exception("Property $property->name is too long");
    }
}

$loginRequest = new LoginRequest();
$loginRequest->username = "Reza";
$loginRequest->password = "reza";
validate($loginRequest);
