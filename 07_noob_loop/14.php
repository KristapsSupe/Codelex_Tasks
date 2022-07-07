<?php
$n = (int) readline("Enter number: ");

for($i = 1; $i < $n; $i++) {
    for ($j = $i; $j <= $n; $j++) {
        echo " -";
    }
    for ($j = 1; $j < $i; $j++) {
        if($j == 1)
            echo " *";
        else
            echo " -";
    }
    for ($j = 1; $j <= $i; $j++) {
        if ($j == $i)
            echo " *";
        else
            echo " -";
    }
    for ($j = $i; $j <= $n; $j++) {
        echo " -";
    }

    echo PHP_EOL;
}

for($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo " -";
    }
    for ($j = $i; $j < $n; $j++) {
        if($j == $i)
            echo " *";
        else
            echo " -";
    }
    for($j = $i; $j <= $n;  $j++) {
        if ($j == $n)
            echo " *";
        else
            echo " -";
    }
    for ($j = 1; $j <= $i; $j++) {
        echo " -";
    }

    echo PHP_EOL;
}