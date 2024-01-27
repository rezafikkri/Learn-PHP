<?php

namespace RezaFikkri\PHPMVC\Tests;

use PHPUnit\Framework\TestCase;

class RegexTest extends TestCase
{
    public function testRegex(): void
    {
        $path = '/products/12345/categories/abcd';
        $pattern = '#^/products/([\d\w]*)/categories/([\d\w]*)$#';
        $result = preg_match($pattern, $path, $matches);

        $this->assertTrue($result);

        var_dump($matches);
    }
}
