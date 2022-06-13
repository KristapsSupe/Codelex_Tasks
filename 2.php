<?php

$number = 40;

function check($number){
    if($number % 2 == 0){
        echo "Even" . ', ' . "bye!";
    }
    else{
        echo "Odd" . ', ' . "bye!";
    }
}
check($number);