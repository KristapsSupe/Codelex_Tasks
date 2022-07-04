<?php

$userNumber = readline('Enter your number: ');

for($i = 0; $i < 1; $i++)
{
    echo str_repeat('*', $userNumber + 2);
    echo str_repeat(' ',  $userNumber);
    echo str_repeat('*', $userNumber + 2);
    echo PHP_EOL;
}

for($i = 1; $i < $userNumber - 1; $i++) {
    echo '*';
    echo str_repeat('/', $userNumber);
    echo '*';

    if (floor($userNumber / 2) == $i) {
        echo str_repeat('|', $userNumber);
    } else echo str_repeat(' ', $userNumber);

    echo str_repeat('*', + 1);
    echo str_repeat('/', $userNumber);
    echo str_repeat('*',  + 1);
    echo PHP_EOL;
}

for($i = $userNumber; $i <= $userNumber; $i++)
{
    echo str_repeat('*', $userNumber + 2);
    echo str_repeat(' ',  $userNumber);
    echo str_repeat('*', $userNumber + 2);
    echo PHP_EOL;
}

