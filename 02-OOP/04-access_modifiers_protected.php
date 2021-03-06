<?php

/**
 * public - the property or method can be accessed from everywhere. This is default
 * protected - the property or method can be accessed within the class and by classes derived from that class
 * private - the property or method can ONLY be accessed within the class
 */

class Animal {

    public $name;
    protected $type;

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

    public function getType()
    {
        return $this->type;
    }
}

$animal = new Animal('Sweetie');

$animal->setType('Cat');

echo $animal->name . ' is a ' . $animal->getType().'<br>';