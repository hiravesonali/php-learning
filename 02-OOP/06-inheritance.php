<?php


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