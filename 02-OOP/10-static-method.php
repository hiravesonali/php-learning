<?php

class Animal {

    // static function
    public static function name() {

    echo " Hello my Darling!";
    echo "<br>";
    }
}

Animal::name();


// method second

class Animal01 {

    public static function name01() {

        echo "My lovely Darling!";
    }

    public function __construct()
    {
       self::name01(); // static method use "self::function name"
    }
}

new Animal01;