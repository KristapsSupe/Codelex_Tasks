<?php

$userNumber = (int)readline ('Enter number: ');

for($i=1; $i<=$userNumber; $i++) {
    for($j=1; $j<=$i; $j++)
    {
        echo ' ';
    }
    for($k=$userNumber; $k>=$i; $k--)
    {
        echo '*';
    }
    echo PHP_EOL;
}

