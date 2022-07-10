<?php



class FortuneTeller
{
    public static function fortunePrediction(string $name, string $location, string $item, string $color): string
    {
        return "You will meet $name in $location, and find $item in a $color room together.";
    }

}

$name = "John";
$location = "Riga";
$item = "Spoon";
$color = "Red";

echo FortuneTeller:: fortunePrediction($name, $location, $item, $color);