<?php

$maxNumber = (int)readline ('Number: ');

for($i = $maxNumber; $i >= 1; $i--)
{
    for($j = 1; $j <= $i; $j++)
        echo $j;
    for($k = $i; $k < $maxNumber; $k++)
        echo "  ";
    for($m = $i; $m >= 1; $m--)
        echo $m;
    echo PHP_EOL;
}

