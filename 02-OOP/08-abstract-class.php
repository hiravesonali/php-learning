<?php

// parent class
abstract class Animal {

    public $name;
    public $type;

    public function __construct($name, $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    abstract public function info($name1);

}

// child classes

class Cat extends Animal {

    public function info($name1) {

    return "I am Cat, and my name is $this->name!";
    
    }

}

class Dog extends Animal {

    public function info ($name1) {

        return " I am Dog, and My name is $this->name!";
    }
}


$Cat = new Cat("Sweetie");
echo $Cat->info($name1);
echo "<br>";

$Dog = new Dog("Tomi");
echo $Dog->info($name2);
