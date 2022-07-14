<?php

$n = readline("Enter the number: ");
$word = readline ("Enter word: ");
$timesTwo = $n * 2;



echo PHP_EOL;

for($i = 2; $i < $n + 1; $i++) {
    for ($j = $i; $j < $n; $j++) {
        echo "-";
    }
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }

    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    for ($j = $i; $j < $n; $j++) {
        echo "-";
    }


    for ($j = $i; $j <= $n; $j++) {
        echo "-";
    }
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }

    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    for ($j = $i; $j < $n; $j++) {
        echo "-";
    }

    echo PHP_EOL;

}
echo "-";

for($i = 0; $i <= $n; $i++) {
        echo "*";
    }
echo $word;

for($i = 0; $i <= $n; $i++) {
    echo "*";
}

echo "-";

echo PHP_EOL;

for($i = 2; $i <= $timesTwo; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "-";
    }
    for ($j = $i; $j < $timesTwo; $j++) {
        echo "*";
    }


    for($j = $i; $j <= $timesTwo;  $j++) {
        echo "*";
    }
    for ($j = 1; $j <= $i; $j++) {
        echo "-";
    }

    echo PHP_EOL;
}



