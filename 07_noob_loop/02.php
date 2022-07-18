<?php

$userNumber = readline('Enter your number: ');

for($i = 0; $i < $userNumber; $i++)
{
    echo str_repeat('* ', $userNumber);
    echo PHP_EOL;
}


