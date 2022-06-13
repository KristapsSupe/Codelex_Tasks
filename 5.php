<?php
$min = 1;
$max = 100;
$num2 = rand($min, $max);

$maxAttempts = 3;
$attempts = 0;

while ($attempts < $maxAttempts)
{
    $num = (int) readline("Guess the number: ");
    if (! is_numeric($num)){
        echo "Enter numbers only";
        continue;

    }
    if ($num === $num2) {
        echo 'You guessed it!  What are the odds?!? I was thinking of ' . $num2 . PHP_EOL;
        break;

    } elseif ($num > $num2) {
        echo 'Sorry, you are too high.' . PHP_EOL;
    } elseif ($num < $num2) {
        echo 'Sorry, you are too low.' . PHP_EOL;
    }
    $attempts++;
}
echo PHP_EOL;
echo 'Thank you for playing I was thinking of ' . $num2 . PHP_EOL;


// jatrod veids ka ierobezot minesanas reizes. Sis bija strugls, jo sakuma meginaju rand likt ieksa visos if.while cikls




/*if ($var > rand($min, $max)) {
    echo "Sorry, you are too high.  I was thinking of " . rand($min, $max);
    } elseif ($var < rand($min, $max)) {
        echo "Sorry, you are too low.  I was thinking of " . rand($min, $max);
    } elseif ($var === rand($min, $max)) {
        echo "You guessed it!  What are the odds?!?";
    }*/



