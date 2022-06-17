<?php
echo "Welcome to Piglet" . PHP_EOL;

$roll = true;

while ($roll) {
    $userInput = readline ('Roll the dice (y or n): ');
    $randomNumber = rand(1, 6);
    $points = 0;
    $pointsCount = $points + 2;



    switch ($userInput) {

        case 'y':
            echo 'You rolled ' . $randomNumber . PHP_EOL;
            break;

        case 'n':
            echo "You got " . $pointsCount . " points" . PHP_EOL;
            exit;

    }
    if ($randomNumber === 1) {
        echo "You got 0 points"  . PHP_EOL;
        exit;
    }
}

// ka uztaisit punktu skaitisanu?
