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
        $this->setType($type);
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function printDetails()
    {
        echo $this->name . ' is a ' . $this->getType().'<br>';
    }
}

/**
 * PHP will automatically call this function when you create an object from a class
 */

$animal = new Animal('Sweetie', 'Cat');

$animal->printDetails();