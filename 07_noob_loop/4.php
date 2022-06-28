<?php
$userNumber = readline('Enter your number: ');
$userChar = readline('Choose char: ');


for($i = 0; $i < $userNumber; $i++)
{
    echo str_repeat($userChar, $userNumber - $userNumber);
    echo str_repeat($userChar, $i + 1);
    echo PHP_EOL;
}

