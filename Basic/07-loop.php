<?php

function multiplication ($multiplier) {
    // $currentValue = $multiplier;
    // while ($currentValue <= $multiplier * 10 ) {
    //     echo "$currentValue <br>";
    //     $currentValue = $currentValue + $multiplier;
    // }

    for($loop = 1; $loop <= 10; $loop++){
        echo $loop * $multiplier . " <br>";
    }
}


multiplication(5);