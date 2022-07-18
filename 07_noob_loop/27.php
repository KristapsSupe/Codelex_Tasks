<?php

$n = (int) readline("Enter number: ");

for($j = 1; $j < $n / 2; $j++) {
    for($i = 1; $i <= $n; $i++) {
        echo "* ";
    }
    echo "\n";

    for($i = 1; $i <= $n; $i++) {
        echo " *";
    }
    echo "\n";
    }
for($i = 0; $i <= $n - 1; $i++) {
    echo "* ";

}
