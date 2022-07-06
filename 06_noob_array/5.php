<?php

$namesOnly = [
    [
        "name" => "Angelina Jolie",
        "age" => 80,
    ],
    [
        "name" => "Eric Jones",
        "age" => 12,
    ],
    [
        "name" => "Paris Hilton",
        "age" => 15,
    ],
    [
        "name" => "Kanye West",
        "age" => 16,
    ],
    [
        "name" => "Bob Ziroll",
        "age" => 100,
    ],
];

$personName = array_column($namesOnly, 'name');

echo implode(', ', $personName);












