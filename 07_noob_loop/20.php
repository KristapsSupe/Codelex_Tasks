<?php

$n = (int) readline("Enter number: ");

for($i = $n; $i >= 1; $i--)
{
    for($j = 1; $j <= $i; $j++) {
        for($j = 1; $j < $i; $j++)
            echo $j . " * ";
    }
        echo $j - 1;
    echo PHP_EOL;
}