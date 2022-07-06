<?php


$number = 1234;

$numberArray  = array_map('intval', str_split($number));

echo implode(', ', array_reverse($numberArray)); //