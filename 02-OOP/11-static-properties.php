<?php

// Static properties can be called directly - without creating an instance of a class. 


class Animal {

    public static $value = "Tomi";

    public function animal01(){

        return self::$value;
    }
}

$Animal = new Animal();
echo $Animal->Animal01();