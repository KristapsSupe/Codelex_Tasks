<?php
$left = '/';
$middle = '*';
$right = '\\';

$leftCount = 16;
$rightCount = 16;
$middleCount = 0;

for($i = 0; $i < 5; $i++)
{
    echo str_repeat($left, $leftCount);
    echo str_repeat($middle, $middleCount);
    echo str_repeat($right, $rightCount);

    echo PHP_EOL;

    $leftCount -= 4;
    $middleCount += 8;
    $rightCount -= 4;
}

