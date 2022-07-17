<?php

$n = readline("Enter number: ");

for($i = 1; $i < $n - 1; $i++) {
    if ($n <= 3) {
        echo str_repeat('*', $n - 2);
        echo '\\';
        echo ' ';
        echo '/';
        echo str_repeat('*', $n - 2);
        echo PHP_EOL;
    }
}
for($i = 1; $i < $n - 3; $i++) {
    if($n > 3)
    {
        echo str_repeat('*', $n - 2);
        echo '\\';
        echo ' ';
        echo '/';
        echo str_repeat('*', $n - 2);
        echo PHP_EOL;

        echo str_repeat('-', $n - 2);
        echo '\\';
        echo ' ';
        echo '/';
        echo str_repeat('-', $n - 2);
        echo PHP_EOL;
    }
}
if($n > 3) {
    echo str_repeat('*', $n - 2);
    echo '\\';
    echo ' ';
    echo '/';
    echo str_repeat('*', $n - 2);
    echo PHP_EOL;
}

    echo str_repeat(' ', $n - 1) . '@' . str_repeat(' ', $n - 1);
    echo PHP_EOL;

for($i = 1; $i < $n - 1; $i++) {
    if ($n <= 3) {
        echo str_repeat('*', $n - 2);
        echo '\\';
        echo ' ';
        echo '/';
        echo str_repeat('*', $n - 2);
        echo PHP_EOL;
    }
}
for($i = 1; $i < $n - 3; $i++) {
    if($n > 3)
    {
        echo str_repeat('*', $n - 2);
        echo '\\';
        echo ' ';
        echo '/';
        echo str_repeat('*', $n - 2);
        echo PHP_EOL;

        echo str_repeat('-', $n - 2);
        echo '\\';
        echo ' ';
        echo '/';
        echo str_repeat('-', $n - 2);
        echo PHP_EOL;
    }
}
if($n > 3)
{
    echo str_repeat('*', $n - 2);
    echo '\\';
    echo ' ';
    echo '/';
    echo str_repeat('*', $n - 2);
    echo PHP_EOL;
}