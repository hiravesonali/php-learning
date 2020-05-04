<?php

// Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.

// parent class
abstract class Animal
{
    public $name;
    
    public function __construct($name)
    {
        $this->name = $name;
    }

    // Subclasses must have to have abstract methods
    abstract public function info();
}

// child classes
class Cat extends Animal
{
    public function info()
    {
        return "I am Cat, and my name is $this->name!";
    }

}

class Dog extends Animal
{
    public function info()
    {
        return " I am Dog, and My name is $this->name!";
    }
}


$cat = new Cat("Sweetie");
echo $cat->info();
echo "<br>";

$dog = new Dog("Tomi");
echo $dog->info();
