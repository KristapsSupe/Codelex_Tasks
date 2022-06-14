<?php

$fruits = [
    [
        'name' => 'Apple',
        'weight' => 10

    ],
    [
        'name' => 'Orange',
        'weight' => 20
    ],
    [
        'name' => 'Banana',
        'weight' => 5
    ]
];

function shippingCost(int $weight): int
{
    if ($weight > 10) {
        return 2;
    }

    return 1;
}

foreach ($fruits as $fruit)
{
    echo $fruit['name'] . ' ' . $fruit['weight'] . ' ' . shippingCost($fruit['weight']) . ' euros';


    echo PHP_EOL;
}