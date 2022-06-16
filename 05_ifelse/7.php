<?php

$number = 10;
switch ($number)
{
    case $number < 50:
        echo "low";
        break;
    case $number >= 50 && $number <= 100:
        echo "medium";
    default:
        echo "High";
        break;
}