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

$onion = [
    ["a", "b", "c", "d"],
    ["e", "f", "g", "h"],
    ["i", "j", "k", "l"],
    ["m", "n", "o", "p"],
];

unset($onion[0][0], $onion[0][1], $onion[0][2], $onion[0][3]);
unset($onion[1][0], $onion[1][3]);
unset($onion[2][0], $onion[2][3]);
unset($onion[3][0], $onion[3][1], $onion[3][2], $onion[3][3]);


echo implode(', ', $onion);
var_dump($onion);
