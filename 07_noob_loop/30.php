<?php

$minNumber = 1;
$maxNumber = (int)readline ('Max?: ');

$numbers = range($minNumber, $maxNumber);

$selectType = readline("Select the type: (a/b/c/d) ");

if ($selectType == "a") {
    // numbers |_\
    for($i = 1; $i <= $maxNumber; $i++){
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ";
        }
        echo PHP_EOL;
    }
}


if ($selectType == "b") {
    // numbers \_|
    for($i = $maxNumber; $i >= 1; $i--) {
        for ($j = $i; $j < $maxNumber; $j++) {
            echo "  ";
        }
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ";
        }
        echo PHP_EOL;
    }
}

if ($selectType == "c") {
    // numbers /_|
    for($i = 1; $i <= $maxNumber; $i++) {
        for ($j = $i; $j < $maxNumber; $j++) {
            echo "  ";
        }
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ";
        }
        echo PHP_EOL;
    }
}


if ($selectType == "d") {
    // numbers |_/
    for($i = $maxNumber; $i >= 1; $i--) {
        for ($j = $i; $j >= 1; $j--) {
            echo $j . " ";
        }
        echo PHP_EOL;
    }
}

