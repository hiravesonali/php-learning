<?php

// if...else statement

$x = "I am Hero";
$y = "I am Heroine";

if ($x ==$y){
    echo "I am good!";
}
else{
    echo "I am Bad!";

}

// if...elseif..else statement

$t = date('H');
echo "<br>";
  if ($t <=12) {
      echo "Good Morning!";
    
  }
  elseif ($t <=16) {
      echo "Good Afternoon";
    
  }
  else {
      echo "good Night!";
  }

