<?php

class Animal {
    public $name;
    public $type;

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }
}


/**
 * Method1: Access class variables directly
 */
$animal1 = new Animal();

$animal1->name = 'Burro';
$animal1->type = 'Dog';

echo $animal1->name . ' is  a ' . $animal1->type.'<br>';

echo '--------------<br>';


/**
 * Method2: Access class variables using class methods
 */
$animal2 = new Animal();
$animal2->name = 'Bastard';
$animal2->setType('Cat');

echo $animal2->name . ' is a ' . $animal2->getType().'<br>';