<?php
/**
 * Create a function that takes an array of numbers and return both the minimum and maximum numbers,
 * in that order in a new array.
 */


class LargestSwap
{
    public static function swapTheLargest(int $number): string
    {
        if ($number > strrev($number)) {
            echo "True";
        } else {
            echo "False";
        }
        return "";
    }
}



echo LargestSwap:: swapTheLargest(27) . PHP_EOL;
echo LargestSwap:: swapTheLargest(43) . PHP_EOL;
echo LargestSwap:: swapTheLargest(14) . PHP_EOL;