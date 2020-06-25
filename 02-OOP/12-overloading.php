<?php

/**
 *  Function from parent class is re-written(extended) in the child class.
 */

 abstract class Resident
 {
     abstract function food();
 }

 class WorldResident
 {
     public function bloodType()
     {
         // This function is only defined in the base class & will be inherited to child class
         return 'depends upon person';
     }

     public function food()
     {
         // will be override in the child classes
         return 'Different everywhere';
     }

     public function taxes($income)
     {
         // will be overloaded in the child classes
         $rate = 10;
         return ($rate/100) * $income;
     }
 }


 class GermanResident extends WorldResident 
 {
     // Inherited other functions

     // Overriding - same number of params/arguments passed but definition changed
    public function food()
    {
        return 'curry wurst';
    }

     //Overloading - different number of params/arguments passed
    public function taxes($income, $churchTaxes)
    {
        $rate = 40 + $churchTaxes;
        return ($rate/100) * $income;
    }
 }

$musk = new WorldResident;
echo $musk->bloodType() . ' >> '. $musk->food().' >> '.$musk->taxes(1000000);

$markel = new GermanResident;
echo $markel->bloodType() . ' >> '. $markel->food().' >> '.$markel->taxes(500000, 2);