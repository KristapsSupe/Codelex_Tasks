<?php

$userNumber = readline('Enter your number: ');



for($i = 0; $i < 1; $i++)
{
    echo str_repeat('*', $userNumber);
    echo PHP_EOL;

}

for($i = 1; $i < $userNumber - 1; $i++)
{
    echo str_repeat('*', $userNumber + 1 - $userNumber);
    echo str_repeat(' ', $userNumber - 2);
    echo str_repeat('*',  + 1);
    echo PHP_EOL;
}
for($i = 4; $i < 5; $i++)
{
    echo str_repeat('*', $userNumber);
    echo PHP_EOL;
}

