<?php

$n = readline("Enter number: ");

$centerLines = $n * 2 - 1;

echo str_repeat('.', $n + 1);
echo str_repeat('_', $n * 2 + 1);
echo str_repeat('.', $n + 1);
echo PHP_EOL;

for($i = 1; $i <= $n; $i++) {
        for ($j = $i; $j <= $n; $j++) {
            echo ".";
        }
    echo str_repeat('//', 1);
    echo str_repeat('_', $centerLines);
    echo str_repeat('\\\\', 1);
    for ($j = $i; $j <= $n; $j++) {
        echo ".";
    }
    echo PHP_EOL;

    $centerLines += 2;
}

echo "//";
for($i = 0; $i < $n * 2 - 3; $i++) {
    echo "_";
}

echo "STOP!";

for($i = 0; $i < $n * 2 - 3; $i++) {
    echo "_";
}
echo "\\\\";
echo PHP_EOL;


echo "\\\\";
for($i = 2; $i <= $n * 4; $i++) {
    echo "_";
}
echo "//";
echo PHP_EOL;


for($i = 1; $i <= $n - 1; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo ".";
    }
    echo str_repeat('\\\\', 1);
    echo str_repeat('_', $centerLines - 2);
    echo str_repeat('//', 1);
    for ($j = 1; $j <= $i; $j++) {
        echo ".";
    }
    echo PHP_EOL;

    $centerLines -= 2;
}

