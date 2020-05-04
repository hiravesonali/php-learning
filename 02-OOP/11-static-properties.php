<?php

// Static properties can be called directly - without creating an instance of a class. 


class Animal {

    public static $value = "Tomi";

    public function name()
    {
        return self::$value;
    }
}

$animal = new Animal();
echo $animal->name();