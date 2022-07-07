<?php

$n = readline("Enter number: ");

echo ' /';
echo str_repeat('^', $n / 2);
echo '\\';
echo str_repeat('_', $n / 2);
echo '/';
echo str_repeat('^', $n / 2);
echo '\\';
echo PHP_EOL;

for($i = 1; $i < $n - 1; $i++) {
    echo ' |';
    echo str_repeat(' ', ($n / 2) + 1);
    echo str_repeat(' ', $n / 2);
    echo str_repeat(' ', ($n / 2) + 1);
    echo '|';
    echo PHP_EOL;
}

    echo ' |';
    echo str_repeat(' ', ($n / 2) + 1);
    echo str_repeat('_', $n / 2);
    echo str_repeat(' ', ($n / 2) + 1);
    echo '|';
    echo PHP_EOL;


echo ' \\';
echo str_repeat('_', $n / 2);
echo '/';
echo str_repeat(' ', $n / 2);
echo '\\';
echo str_repeat('_', $n / 2);
echo '/';
echo PHP_EOL;

