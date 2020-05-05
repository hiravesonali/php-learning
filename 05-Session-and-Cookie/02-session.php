<?php

session_start();

if (isset($_SESSION['favcolor'])) {
    echo 'My favorite color is ' . $_SESSION['favcolor'] . ' and animal is ' . $_SESSION['favanimal'];
} else {
    $_SESSION['favcolor'] = 'green';
    $_SESSION['favanimal'] = 'cat';

    echo 'Session variables are set.';
}