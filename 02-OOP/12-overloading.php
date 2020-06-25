<?php

/**
 *  Function from parent class is re-written in child class.
 */

 abstract class Resident
 {
     abstract function food();
 }

 class WorldResident
 {
     public function bloodType()
     {
         return 'depends upon person';
     }

     public function food()
     {
         return 'Different everywhere';
     }

     public function culture()
     {
         return 'different in continents';
     }

     public function taxes($income)
     {
         $rate = 10;
         return ($rate/100) * $income;
     }
 }

 class GermanResident extends WorldResident 
 {
     //Overloading
    public function taxes($income, $churchTaxes)
    {
        $rate = 40+$churchTaxes;
        return ($rate/100) * $income;
    }
 }