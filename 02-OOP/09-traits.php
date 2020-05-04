
<?php

// Traits can have methods and abstract methods that can be used in multiple classes, 
//and the methods can have any access modifier (public, private, or protected).

trait Animal {

    public function animal01(){

        echo "I am the coolest pet!";
    }
}

class AnimalInfo {
    use Animal;

}

$name = new AnimalInfo();
$name->animal01();
