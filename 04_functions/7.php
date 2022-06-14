<?php

$persons =
    [
            "license" => [  "license1" => "a",
                            "license2" => "b"], //php.net array_keys, pagaja 1h kamer atradu ka pieklut sim
            "name" => "John",
            "money" => 50000
    ];

$guns =
    [
        [
            "license" => "a",
            "name" => "uzi",
            "price" => 30000
        ],
        [
            "license" => "b",
            "name" => "tommy",
            "price" => 70000
        ],
    ];


//$result = array_diff($person,$guns); // meginaju ar ifiem, bet sarezgitu visu parabaudit

echo    "Licenses: " . $persons["license"]["license1"] . ', ' . $persons["license"]["license2"] . ', ' .
        "Name: " . $persons["name"] . ', ' . "Money: " . $persons["money"] . " EUR" . PHP_EOL;


if($persons["license"]["license1"] === $guns[0]["license"])
{
    echo "Has license for " . $guns[0]["name"] . PHP_EOL;
} else {
    echo "Doesnt have license for " . $guns[0]["name"]. PHP_EOL;
}

if($persons["money"] >= $guns[0]["price"])
{
    echo "Has money for " . $guns[0]["name"]. PHP_EOL;
} else {
    echo "No money for " . $guns[0]["name"] . PHP_EOL;
}

if($persons["license"]["license1"] === $guns[1]["license"])
{
    echo "Has license for " . $guns[1]["name"] . PHP_EOL;
} else {
    echo "Doesnt have license for " . $guns[1]["name"] . PHP_EOL;
}

if($persons["money"] >= $guns[1]["price"])
{
    echo "Has money for " . $guns[1]["name"] . PHP_EOL;
} else {
    echo "No money for " . $guns[1]["name"] . PHP_EOL;
}

// ar kuru no array funkcijam var salidzinat dazadus value vairaku array? in_array