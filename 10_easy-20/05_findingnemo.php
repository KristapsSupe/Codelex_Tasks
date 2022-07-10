<?php

/**
 * You're given a string of words.
 * You need to find the word "Nemo", and return a string like so: "I found Nemo at X!", X is the index of the word.
 * If you can't find Nemo, return "I can't find Nemo :(".
 */

class Nemo
{
    public static function findNemo(string $words): string
    {
        $position = strpos($words, 'Nemo');

        if (strpos($words, 'Nemo') !== false) {
            return "I found Nemo at $position! $position is the index of the word";
        } else
            return "I can't find Nemo :(";
    }
}

$words = "Look how far Nemo has gone!";

echo Nemo:: findNemo($words);
