<?php

namespace Patterns\Creational;

class Singleton
{
    private static ?Singleton $instance = null;

    private function __construct() {}
    private function __clone() {}
    public function __wakeup() {}

    public static function getInstance(): Singleton
    {
        if (self::$instance === null) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }
}

class ClassicObject {}

// Test
$instance = Singleton::getInstance();
$instance2 = Singleton::getInstance();
// $instance5 = new Singleton(); not allowed

$instance3 = new ClassicObject();
$instance4 = new ClassicObject();

var_dump($instance, $instance2);
var_dump($instance3, $instance4);
