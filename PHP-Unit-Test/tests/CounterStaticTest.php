<?php

namespace RezaFikkri\PHPUnit;

use PHPUnit\Framework\Attributes\BeforeClass;
use PHPUnit\Framework\TestCase;

class CounterStaticTest extends TestCase
{
    // Kenapa harus static property? 
    // Karena disetiap test class CounterTest akan selalu di instance, maka jika property bukan static,
    // value dari property tersebut akan selalu diset ulang (direset). Lain halnya jika property itu static,
    // mau class CounterTest di instance berapa kalipun, tidak akan mempengaruhi nilai dari static property,
    // karena static property adanya di level class bukan level object. Maka sangat cocok untuk membuat
    // sharing fixture.

    // Tapi bagaimana cara pertama kali membuat Counter? Kita
    // bisa menggunakan static method setUpBeforeClass atau dengan menambahkan attribute BeforeClass

    // Menurut saya sharing fixture ini berguna jika kita ingin membuat integration test, sehingga membutuhkan
    // koneksi ke database, karena koneksi ke database itu mahal, sehingga akan membuat unit test kita
    // lambat.
    private static Counter $counter;

    public static function setUpBeforeClass(): void
    {
        // static::$counter = new Counter;
    }

    #[BeforeClass()]
    public static function createCounter(): void
    {
        static::$counter = new Counter;
    }

    public function testFirst(): void
    {
        static::$counter->increment();
        $this->assertEquals(1, static::$counter->getCounter());
    }

    public function testSecond(): void
    {
        static::$counter->increment();
        $this->assertEquals(2, static::$counter->getCounter());
    }

    public static function tearDownAfterClass(): void
    {
        echo PHP_EOL . "Hanya dijalankan sekali untuk semua test" . PHP_EOL;
    }
}
