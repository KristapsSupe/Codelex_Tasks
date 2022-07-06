<?php

$elements = [4, 3, 9, 7, 2, 1];


function check(int $number): int
{
    return sqrt($number);
}

for ($i = 0; $i < count($elements); $i++)
{
    if (gmp_perfect_square($elements[$i])) {
        echo check($elements[$i]) . PHP_EOL;
    } else {
        echo $elements[$i] * $elements[$i]  . PHP_EOL;
    }
}






