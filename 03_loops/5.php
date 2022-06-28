<?php

echo "Welcome to Piglet" . PHP_EOL;

$points = 0;


while (true) {

    $userInput = readline ('Roll the dice (y or n): ');
    $randomNumber = rand(1, 6);


    switch ($userInput) {

        case 'y':
            echo 'You rolled ' . $randomNumber . PHP_EOL;
            $points = $points + 2;
            break;


        case 'n':
            echo $points . " points" . PHP_EOL;
            exit;
    }

    if ($randomNumber === 1) {
        echo "You got 0 points"  . PHP_EOL;
        exit;
    }
}
