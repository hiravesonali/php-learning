<?php

/**
 * Constructor is a public function which starts with __
 */

class Animal {

    public $name;
    public $type;

    public function __construct($name, $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    public function printDetails()
    {
        echo $this->name . ' is a ' . $this->type.'<br>';
    }
}

/**
 * PHP will automatically call this function when you create an object from a class
 */

$animal = new Animal('Sweetie', 'Cat');

$animal->printDetails();