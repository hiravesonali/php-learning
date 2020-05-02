<?php

function descending($max) {

    for ($x = $max; $x > 0; $x--) {
    
        for ($y = $x; $y > 0; $y--) {
            echo "* ";
        }

        echo  "<br>";
    }
}

descending(5);