<?php

$namesAndAgesOnly = [
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

$personNameAndAge = array_column($namesAndAgesOnly, 'age', 'name');

print_r($personNameAndAge);

//echo implode(', ', $personNameAndAge);









