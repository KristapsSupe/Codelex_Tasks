<?php

/**
 * There's a great war between the even and odd numbers.
 * Many numbers already lost their life in this war and it's your task to end this.
 * You have to determine which group is larger: the even, or the odd. The larger group wins.
 * Create a function that takes an array of integers, sums the even and odd numbers seperately,
 * then returns "Odd numbers win by X" or "Even numbers win by X", X is survivors.
 * If both groups are equal, return "There are no winners"
 */

class NumbersWar
{

    public static function sumEven(array $numbers): int
    {
        $evenArray = [];
        foreach ($numbers as $number) {
            if ($number % 2 === 0) {
                $evenArray[] += $number;
                $sumEven = array_sum($evenArray);
            }
        }
        return $sumEven;
    }
    public static function sumOdd(array $numbers): int
    {
        $oddArray = [];
        foreach ($numbers as $number) {
            if ($number % 2 === 1) {
                $oddArray[] += $number;
                $sumOdd = array_sum($oddArray);
            }
        }
        return $sumOdd;
    }
}


$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9,];

echo "Even numbers sum: " . NumbersWar:: sumEven($numbers) . PHP_EOL;
echo "Odd numbers sum: " . NumbersWar:: sumOdd($numbers) . PHP_EOL;


