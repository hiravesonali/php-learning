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

$animal1 = new Animal();

$animal1->name = 'Burro';
$animal1->setType('Dog');

echo $animal1->name . ' is  a ' . $animal1->getType().'<br>';

echo '--------------<br>';

$animal2 = new Animal();
$animal2->name = 'Bastard';
$animal2->type = 'Cat';

echo $animal2->name . ' is a ' . $animal2->type.'<br>';