<?php

$n = readline("Enter number: ");
$selectDirection = readline("Select direction: ");

if ($selectDirection === "r")
{
    // arrow ->
    for($i = 0; $i < $n - 1; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "  ";
        }
        for ($j = $i; $j < $n; $j++) {
            if ($j == $i)
                echo "*";
            else
                echo "*";
        }
        echo PHP_EOL;
    }

    for($i = 1; $i <= $n; $i++) {
        for ($j = $i; $j < $n; $j++) {
            echo "  ";
        }
        for ($j = 0; $j < $i; $j++) {
            if ($j == 1)
                echo "*";
            else
                echo "*";
        }
        echo PHP_EOL;
    }
}

if ($selectDirection === "l") {
    // arrow <-
    for ($i = 1; $i <= $n - 1; $i++) {
        for ($j = $i; $j < $n; $j++) {
            echo " ";
        }
        for ($j = $i; $j <= $n; $j++) {
            echo "*";
        }
        echo PHP_EOL;
    }

    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j < $i; $j++) {
            echo " ";
        }
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo PHP_EOL;
    }
}