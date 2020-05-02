<?php

function descending($max) {

    for ($x = $max; $x > 0; $x--) {
    
        for ($y = $x; $y > 0; $y--) {
            echo "* ";
        }

        echo  "<br>";
    }
}

function ascending($max, $char = 'S') {

    for($x = 1; $x <= $max; $x++) {
        for ($y = 1; $y <= $x; $y++){        
            echo "$char ";
        }
        echo "<br>";
    }
}

ascending(5, 'Sonali');
descending(5);