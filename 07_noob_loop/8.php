<?php

$userNumber = readline('Enter your number: ');

for($i = 0; $i < $userNumber; $i++)
{

    echo str_repeat(' ', $userNumber - $i);
    echo str_repeat(' *', $i + 1);
    echo str_repeat('   ', $userNumber - $i);

    echo PHP_EOL;

}

for($i = 0; $i < $userNumber; $i++)
{

    echo str_repeat(' ', $i + 2);
    echo str_repeat(' *', $userNumber - $i - 1);
    echo str_repeat('   ', $userNumber - $i);

    echo PHP_EOL;

}