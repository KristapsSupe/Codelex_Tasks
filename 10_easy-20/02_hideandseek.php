<?php

/**
 * A lowercase word is hiding amongst a crowd of uppercase letters!
 * Write a function that returns the hidden name.
 */

class LowerCase
{
    public static function findLowerCase(string $name): string
    {
        return trim(implode(array_intersect(str_split($name),str_split(strtolower($name)))));

    }

}

$name = "AASFSDAShugoAHjeKJteSLK";

echo LowerCase:: findLowerCase($name);