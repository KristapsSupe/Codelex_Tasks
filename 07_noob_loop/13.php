<?php

$userNumber = readline('Enter your number: ');

for($i = 1; $i < $userNumber; $i++) {
    echo str_repeat('-', $userNumber - $i - 1);
    echo str_repeat('*', $i * 2);
    echo str_repeat('-', $userNumber - $i - 1);
    echo PHP_EOL;
}

for($i = 0; $i < $userNumber / 2; $i++) {
    echo '|';
    echo str_repeat('*', $userNumber * 2 - 4);
    echo '|';
    echo PHP_EOL;
}


