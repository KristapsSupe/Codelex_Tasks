<?php

$n = (int)readline("Enter number: ");

$selectDirection = readline("Select direction: (right/left) ");

$isItEmpty = readline("Is it empty? (y/n) ");

// right full
if($selectDirection === 'right') {
    for ($i = 1; $i < $n; $i++) {
        for ($j = $i; $j <= $n; $j++) {
            echo "  ";
        }
        for ($j = 1; $j < $i; $j++) {
            echo " *";
        }
        for ($j = $i; $j <= $n; $j++) {
            echo " *";
        }

        echo PHP_EOL;
    }
}

// left full
if($selectDirection === 'left') {
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "  ";
        }
        for ($j = $i; $j < $n; $j++) {
            echo " *";
        }
        for ($j = 1; $j <= $i; $j++) {
            echo " *";
        }

        echo PHP_EOL;
    }
}

// right empty
if($isItEmpty === 'y' && $selectDirection === 'right') {
    for ($i = 1; $i <= $n; $i++) {
        for ($j = $i; $j <= $n; $j++) {
            echo "  ";
        }
        for ($j = 1; $j <= $i; $j++) {
            if ($i == $n || $j == 1)
                echo " *";
            else
                echo "  ";
        }
        for ($j = $i; $j <= $n; $j++) {
            if ($i == 1 || $j == $n)
                echo " *";
            else
                echo "  ";
        }

        echo PHP_EOL;
    }
}
// left empty
if($isItEmpty === 'y' && $selectDirection === 'left') {
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "  ";
        }
        for ($j = $i; $j <= $n; $j++) {
            if ($i == 1 || $j == $i || $j == 1)
                echo " *";
            else
                echo "  ";
        }
        for ($j = 1; $j <= $i; $j++) {
            if ($i == $n || $j == $i)
                echo " *";
            else
                echo "  ";
        }

        echo PHP_EOL;
    }
}