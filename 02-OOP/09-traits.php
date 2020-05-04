
<?php

// Traits can have methods and abstract methods that can be used in multiple classes, 
//and the methods can have any access modifier (public, private, or protected).

trait AnimalInfo
{
    public function info()
    {
        return "I am $this->type, and my name is $this->name!";
    }
}

abstract class Animal
{
    public $name;
    protected $type;
    
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
    use AnimalInfo;

    public function __construct($name)
    {
        parent::__construct($name);

        $this->type = 'Cat';
    }
}

class Dog extends Animal
{
    use AnimalInfo;

    public function __construct($name)
    {
        parent::__construct($name);

        $this->type = 'Dog';
    }
}


$cat = new Cat('Sweetie');
echo $cat->info();
echo "<br>";

$dog = new Dog('Tomi');
echo $dog->info();
