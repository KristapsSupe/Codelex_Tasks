<?php

$userNumber = readline('Enter your number: ');

for($i = 0; $i < $userNumber; $i++)
{

    echo str_repeat(' ',  $userNumber - $i);
    echo str_repeat('*',  $userNumber + $i - $userNumber);
    echo ' | ';
    echo str_repeat('*', $userNumber + $i - $userNumber);

    echo PHP_EOL;

}
