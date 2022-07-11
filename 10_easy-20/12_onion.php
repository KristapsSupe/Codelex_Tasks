<?php
/**
 * You have made a virtual onion and want to peel off the outer layer.
 * Given an array of arrays, return a new array of arrays containing every element, except for the outer elements.
 *
 * Example:
 *
 * Input:
[
["a", "b", "c", "d"],
["e", "f", "g", "h"],
["i", "j", "k", "l"],
["m", "n", "o", "p"]
]
 * Output:
[
["f", "g"],
["j", "k"]
]
 */


class Onion
{
    public static function peelTheOnion(array $onion): string
    {
        array_pop($onion);
        array_shift($onion);


        for ($i = 0; $i < count($onion); $i++) {
            array_shift($onion[$i]);
            array_pop($onion[$i]);
        }
        return implode(', ', $onion);
    }
}

$onion1 = [
    ["a", "b", "c", "d"],
    ["e", "f", "g", "h"],
    ["i", "j", "k", "l"],
    ["m", "n", "o", "p"]
];

$onion2 =  [
    [6, 7, 8, 9, 10],
    [11, 12, 13, 14, 15],
    [16, 17, 18, 19, 20],
    [21, 22, 23, 24, 25],
    [26, 27, 28, 29, 30],
    [31, 32, 33, 34, 35],
    ];

$onion3 = [
    ["apple", "apple", "apple"],
    ["apple", "banana", "apple"],
    ["apple", "apple", "apple"],
];

echo Onion:: peelTheOnion($onion1) . PHP_EOL;
echo Onion:: peelTheOnion($onion2) . PHP_EOL;
echo Onion:: peelTheOnion($onion3) . PHP_EOL;