<?php

class A {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        static::who(); // Here comes Late Static Bindings
    }
}

class B extends A {
    public static function who() {
        echo __CLASS__;
    }
}

/*
 * Static keyword akan mereferensikan class yang dipanggil, sedangkan keyword self akan mereferensikan
 * class dimana dia didefinisikan.
 *
 * Dengan kata lain walaupun keyword static didefinisikan didalam method pada class parent,
 * tetapi ketika method tersebut dipanggil melalui child classnya,
 * maka keyword static akan mereferensikan child classnya. Berbeda dengan keyword self,
 * dimana dengan kasus yang sama, jika keyword self didefiniskan di dalam class parent, maka ketika
 * method tersebut dipanggil melalui child classnya, maka keyword self akan mereferensikan
 * class dimana ia didefiniskan, yaitu parent classnya.
*/
