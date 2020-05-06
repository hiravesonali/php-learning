<?php
function fibonacci01($count) {

    $fib = [0, 1];

    for($i = 1; $i < $count; $i++) {
        $fib[] = $fib[$i] + $fib[$i-1];
    }

    return $fib;
}

var_dump(fibonacci01(15));


//second

function fibonacci($maxNumber) {

    $fib = [0, 1];
    $latestNumber = 1;

    for ($i = $latestNumber; $latestNumber < $maxNumber; $i++) {
        
        $latestNumber = $fib[$i] + $fib[$i-1];

        if ($latestNumber > $maxNumber) {
            break;
        }

        $fib[] = $latestNumber;
    }

    return $fib;
}

var_dump(fibonacci(1000));