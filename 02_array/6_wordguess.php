<?php

$words = ["sport", "car", "codelex"];

$randomWord = $words[array_rand($words)];

echo $randomWord . PHP_EOL;

$maxAttempts = 3;
$attempts = 0;

while ($attempts < $maxAttempts)
{
    $arrayOfLetters = str_split($randomWord);
    $copyOfArray = array_map(function($val) { return "*"; }, $arrayOfLetters);
    echo 'Word: ' . implode(', ', $copyOfArray) . PHP_EOL;


    $userLetter = (string) readline("Guess: ");



    echo 'Misses: ' . implode(', ', $arrayOfLetters) . PHP_EOL;


    if (in_array($userLetter, $arrayOfLetters)) {
        echo "Correct letter" . PHP_EOL;
    }else{
        echo "Not a letter in this word" . PHP_EOL;
    }
    $attempts++;
}
/**{
    $arrayOfLetters = str_split($randomWord);
    print_r ($arrayOfLetters);

    $misses = [];

    echo 'Word: ' . implode(', ', $arrayOfLetters) . PHP_EOL;

    $userLetter = (string) readline("Guess the word and enter the letter: ");


    if (in_array($userLetter, $arrayOfLetters)) {
        echo
    }else{
        echo "Not a letter in this word";
    }
    $attempts++;
}

echo PHP_EOL;
echo 'Thank you for playing I was thinking of ' . $randomWord . PHP_EOL;*/










