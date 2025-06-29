<?php

class MathUtils {
    public static float $pi = 3.14159;

    public static function square(float $number): float {
        return $number * $number;
    }
}

class Connection {
    private static $instance = null;
    public function __construct() {}

    public static function singleton() {
        if (null === static::$instance) {
            Connection::$instance = new static();
        }
        return static::$instance;
    }
    
}

$connection = Connection::singleton();

var_dump(
    MathUtils::$pi,
    MathUtils::square(4)
);