<?php

function ascending($max){
     
    for ($x = 1; $x <= $max; $x++){

        for ($y = 1; $y <= $x; $y++){

            echo "S";
        }

        echo "<br>";
    }
}

ascending(5);