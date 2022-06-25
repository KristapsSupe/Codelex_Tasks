<?php

$namesOnly = [
    [
        ["Angelina Jolie"],
        [80],
    ],
    [
        ["Eric Jones"],
        [2],
    ],
    [
        ["Paris Hilton"],
        [5],
    ],
    [
        ["Kayne West"],
        [16],
    ],
    [
        ["Bob Ziroll"],
        [100],
    ],
];

echo implode(', ', array_map(function ($entry) {
    return $entry[0];
}, $namesOnly));





