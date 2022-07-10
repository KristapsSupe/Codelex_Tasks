<?php

/**
 * You just returned home to find your mansion has been robbed!
 * Given an object of the stolen items, return the total amount of the burglary (number).
 * If nothing was robbed, return the string "Lucky you!".
 */

class Burglary
{

    public static function totalDamage(array $items): int
    {
        return array_sum(array_map(function($price) {
            return $price['price'];
        }, $items));
    }
}

$items =
    [
        ["title" => "Tesla Model S", "price" => 90000],
        ["title" => "4 carat diamond ring", "price" => 45000],
        ["title" => "Fancy hacky Sack", "price" => 5],
        ["title" => "Gold fidgit spinner", "price" => 2000],
        ["title" => "A second Tesla Model S", "price" => 90000],
    ];

$wasSomethingStolen = readline("Was something stolen? (y/n) ");

if ($wasSomethingStolen === "y")
{
    echo Burglary:: totalDamage($items) . " $";
}

if ($wasSomethingStolen === "n")
{
    echo "Lucky you!";
}

