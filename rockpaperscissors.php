<?php

$rockPaperScissors = ['rock', 'paper', 'scissors', 'lizard', 'spock'];

$userInput = readline("Enter: " . implode(', ' , $rockPaperScissors) . " - ");

$pcInput = $rockPaperScissors[array_rand($rockPaperScissors)];

$conditions = [
    'rock' => ['scissors', 'lizard'],
    'paper' => ['rock', 'spock'],
    'scissors' => ['paper', 'lizard'],
    'lizard' => ['paper', 'spock'],
    'spock' => ['rock', 'scissors'],

];

echo $userInput . " VS " . $pcInput . PHP_EOL;


if ($userInput === $pcInput){
    echo "Its a tie!"  . PHP_EOL;
    exit;
}

if (in_array($pcInput, $conditions[$userInput])){ //kada logika cilveku valoda?
    echo "You win!";
    exit;
}

echo "You loose!";


/**

} elseif ($pcInput === "rock"){
    if ($userInput === "scissors"){
        echo "You won";
    }
} elseif ($pcInput === "paper"){
    if ($userInput === "rock"){
        echo "You lost";
    }
} elseif ($pcInput === "scissors"){
    if($userInput === "rock"){
        echo "You won";
    } else {
        if($userInput === "paper"){
            echo "You lost";
        }
    }
}

echo "PC Choose: " . $pcInput . PHP_EOL;
*/




