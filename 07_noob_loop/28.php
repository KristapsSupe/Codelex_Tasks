<?php

$n = (int) readline("Enter number: ");
$selectType = readline("Select the type: (a/b/c/d) ");

if ($selectType == "a") {
    // triangle |_\
    for($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo " *";
        }
        echo PHP_EOL;
    }
}


if ($selectType == "b") {
    // triangle |_/
    for($i = 1; $i <= $n; $i++) {
        for ($j = $i; $j <= $n; $j++) {
            echo " *";
        }
        echo PHP_EOL;
    }
}


if ($selectType == "c") {
    // triangle \_|
    for($i = 0; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "  ";
        }
        for ($j = $i; $j < $n; $j++) {
            if ($j == $i)
                echo " *";
            else
                echo " *";
        }
        echo PHP_EOL;
    }
}


if ($selectType == "d") {
    // triangle /_|
    for($i = 1; $i <= $n; $i++) {
        for ($j = $i; $j <= $n; $j++) {
            echo "  ";
        }
        for ($j = 0; $j < $i; $j++) {
            if ($j == 1)
                echo " *";
            else
                echo " *";
        }
        echo PHP_EOL;
    }
}


