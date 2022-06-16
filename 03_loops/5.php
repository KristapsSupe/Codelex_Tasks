<?php

$roll = true;


while ($roll) {
    $userInput = readline ('Roll the dice (y or n): ');

    switch ($userInput) {
        case 'y':
            echo 'You rolled ' . rand(1, 6) . PHP_EOL;
            break;

        default:
            echo $roll = false;
            break;
    }
}
echo "Thanks";
