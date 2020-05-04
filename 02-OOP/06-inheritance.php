<?php

/**
 * public - the property or method can be accessed from everywhere. This is default
 * protected - the property or method can be accessed within the class and by classes derived from that class
 * private - the property or method can ONLY be accessed within the class
 */

class Animal {

    public $name;

    private $type;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setType($type)
    {
        if ($type == 'Cat') {
            $this->type = $type;
        }
    }

    protected function getType()
    {
        return $this->type;
    }
}

class Pet extends Animal
{
    public $cloths;

    public function printDetails()
    {
        echo $this->name . ' is a ' . $this->getType().' who likes '. $this->cloths.' cloths <br>';
    }
}

$pet = new Pet('Sweetie');

$pet->setType('Cat');
$pet->cloths = ' Red';

echo $pet->printDetails();