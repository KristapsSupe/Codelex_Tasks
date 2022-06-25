<?php
$numbers = [3, 6, 8, 2];

function overFive(int $num): int {
    return $num > 5;
}

$numbersOverFive = array_filter($numbers, "overFive");

echo implode(', ', $numbersOverFive);

