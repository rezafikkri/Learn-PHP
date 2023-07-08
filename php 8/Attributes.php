<?php

namespace PHP8;

use Attribute;
use Exception;
use ReflectionClass;
use ReflectionProperty;

// ketika mendeklarasikan attribute tidak sesuai target
// maka akan throw exception ketika menjalankan ReflectionAttribute::newInstance()
#[Attribute(Attribute::TARGET_CLASS)] 
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
    #[Length(min: 4, max: 10)]
    #[NotBlank]
    public string $username;
    
    #[NotBlank, Length(min: 8, max: 10)]
    public string $password;

    public string $age;
}

function validate(object $object): void
{
    $reflection = new ReflectionClass($object);
    $properties = $reflection->getProperties();

    foreach ($properties as $property) {
        validateNotBlank($property, $object);
        validateLength($property, $object);
    }
}

function validateNotBlank(ReflectionProperty $property, object $object): void
{
    $attributes = $property->getAttributes(NotBlank::class);
    if (count($attributes) > 0) {
        if (!$property->isInitialized($object)) {
            throw new Exception("Property $property->name is not set");
        } elseif (trim($property->getValue($object)) == "") {
            throw new Exception("Property $property->name is empty");
        }
    }
}

function validateLength(ReflectionProperty $property, object $object): void
{
    if (!$property->isInitialized($object)) return;

    $attributes = $property->getAttributes(Length::class);
    if (count($attributes) > 0) {
        $valueLength = strlen($property->getValue($object));

        foreach ($attributes as $a) {
            $length = $a->newInstance();
            if ($valueLength < $length->min) {
                throw new Exception("Property $property->name is too short");
            } elseif ($valueLength > $length->max) {
                throw new Exception("Property $property->name is too long");
            }
        }
    }
}

$request = new LoginRequest();
$request->username = "reza";
$request->password = "reeza1234";
validate($request);
