<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15];
$posNegArray = [];

    $positive = count(array_filter($numbers, function ($num){
        return $num > 0;
    }));
    echo $positive;

    $negative = array_sum(array_filter($numbers, function ($num){
        return $num < 0;
    }));
    echo $negative;


array_push($posNegArray, $positive) . PHP_EOL;



