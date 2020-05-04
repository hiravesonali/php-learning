<?php

class Animal
{
    // static function
    public static function name()
    {
        echo " Hello my Darling!";
        echo "<br>";
    }
}

Animal::name(); // This is right approach


// method second
class Animal01
{
    public function __construct()
    {
       self::name01(); // static method use "self::function name"
    }

    public static function name01()
    {
        echo "My lovely Darling!";
    }
}

new Animal01;