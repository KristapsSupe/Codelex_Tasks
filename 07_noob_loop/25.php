<?php

$n = readline("Enter number: ");

$centerLines = 0;
$centerSides = 0;
$endLines = 0;

for($i = 0; $i < $n; $i++) {
    echo str_repeat('-', $n * 3);
    echo str_repeat('*', 1);
    echo str_repeat('-', $centerLines);
    echo str_repeat('*', 1);
    for ($j = $i; $j < $n; $j++) {
        echo "-";
    }
    if ($n > 4) {
        echo str_repeat('-', $endLines + $n - 5 + 3);
    }

    echo PHP_EOL;

    $centerLines += 1;
}

for($i = 1; $i <= $n / 2; $i++) {
    echo str_repeat('*', $n * 3);
    echo str_repeat('*', 1);
    echo str_repeat('-', $centerLines - 1);
    echo str_repeat('*', 1);
    echo str_repeat('-', $n - 1);
    echo PHP_EOL;
}
for($i = 1; $i <= $n / 2 - 1; $i++) {
    echo str_repeat('-', $n * 3 + $centerSides);
    echo str_repeat('*', 1);
    echo str_repeat('-', $centerLines - 1);
    echo str_repeat('*', 1);
    echo str_repeat('-', $n - 1 + $centerSides);

    echo PHP_EOL;

    $centerSides -= 1;
    $centerLines += 2;
}

for($i = 1; $i <= $n - ($n - 1); $i++) {
    echo str_repeat('-', $n * 3 + $centerSides);
    echo str_repeat('*', 1);
    echo str_repeat('*', $centerLines - 1);
    echo str_repeat('*', 1);
    echo str_repeat('-', $n - 1 + $centerSides);

    echo PHP_EOL;

    $centerSides -= 1;
    $centerLines += 2;
}