<?php
$n = readline("Enter number: ");


echo str_repeat('.', $n / 2);
echo str_repeat('#', $n);
echo str_repeat('.', $n / 2);
echo PHP_EOL;

for($i = 1; $i <= $n - 2; $i++)
{
    echo str_repeat('.', $n / 2);
    echo str_repeat('#', 1);
    echo str_repeat('.', $n - 2);
    echo str_repeat('#', 1);
    echo str_repeat('.', $n / 2);
    echo PHP_EOL;
}

echo str_repeat('#', $n / 2 + 1);
echo str_repeat('.', $n - 2);
echo str_repeat('#', $n / 2 + 1);
echo PHP_EOL;

for($i = 2; $i <= $n; $i++) {
    for ($j = 1; $j < $i; $j++) {
        echo ".";
    }
    for ($j = $i; $j < $n; $j++) {
        if($j == $i)
            echo "#";
        else
            echo ".";
    }
    for($j = $i; $j <= $n;  $j++) {
        if ($j == $n)
            echo "#";
        else
            echo ".";
    }
    for ($j = 1; $j < $i; $j++) {
        echo ".";
    }

    echo PHP_EOL;
}