<?php
/**
 * Create a function that takes an array of numbers and return both the minimum and maximum numbers,
 * in that order in a new array.
 */


class MinMax
{
    public static function minAndMaxNumber(array $numbers): string
    {

        $getMax = max($numbers);
        $getMin = min($numbers);
        $minAndMaxNumber = [$getMin,$getMax];

        return implode(', ', $minAndMaxNumber);
    }
}



echo "Min Max numbers are: " . MinMax:: minAndMaxNumber([1, 2, 3, 4, 5]) . PHP_EOL;
echo "Min Max numbers are: " . MinMax:: minAndMaxNumber([2334454, 5]) . PHP_EOL;
echo "Min Max numbers are: " . MinMax:: minAndMaxNumber([1]) . PHP_EOL;
