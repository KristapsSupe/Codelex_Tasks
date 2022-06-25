<?php

$numbers = [3, 6, 8, 2];

function even(int $num): int
{
    return $num % 2 === 0;
}

$numbersEven = array_filter($numbers, "even");

echo implode(', ', $numbersEven);

