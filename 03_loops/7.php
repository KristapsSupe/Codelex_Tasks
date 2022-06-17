<?php
echo "RollTwoDice" . PHP_EOL;

$userInput = (int)readline ('Write number from 1 - 12: ') . PHP_EOL;

for ($i=1; $i <= 1000000; $i++) {
    $diceOne = rand(1, 6);
    $diceTwo = rand(1, 6);

    $sum = $diceOne + $diceTwo;

    if ($sum == $userInput) {
        echo $diceOne . " and " . $diceTwo . " = " . $sum . PHP_EOL;
        exit;
    }
    echo $diceOne . " and " . $diceTwo . " = " . $sum . PHP_EOL;

}

