<?php


class Animal
{
    public $name;
    public $type;

    // contants value cannot be chaged once it declared.

    const LEAVING_MESSAGE = "I am your love don't forget it!";

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }
}

echo Animal::LEAVING_MESSAGE;     // We can access the constants from 

echo "<br>";                       // outside of class with use operator[::]

$animal2 = new Animal();           // or within the class to use "self::(name of const)"
$animal2->name = 'Bastard';
$animal2->setType('Cat');

echo $animal2->name . ' is a ' . $animal2->getType().'<br>';