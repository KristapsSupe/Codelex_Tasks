<?php

$userNumber = readline('Enter your number: ');

$coef = 1;
$rows = $userNumber; // add your number of row

for($i = 0; $i < $rows; $i++)
{
    for($space = 1; $space <= $rows - $i; $space++)
        echo (" "); //add space

    for($j=0; $j <= $i; $j++)
    {
        if ($j == 0 || $i == 0)
            $coef = 1;
        else
            $coef = $coef*($i - $j+1)/$j;

        echo ($coef." "); //add space in number
    }
    echo PHP_EOL;
}