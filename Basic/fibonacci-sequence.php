<?php
function fibonacci($maxNumber, $first = 0, $second = 1) {

    $fib = [$first, $second];

    for($i=1; $second < $maxNumber; $i++) {
        $second = $fib[$i] + $fib[$i-1];
        
        if ($second > $maxNumber) {
            continue;
        }

        $fib[] = $second;
    }

    return $fib;
}

echo "<pre>";

print_r(fibonacci(2000));