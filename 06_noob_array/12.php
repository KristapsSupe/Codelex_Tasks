<?php


$number = 1234; //readline('Enter number: ') . PHP_EOL; ar readline liek priekšā 0

$numberArray  = array_map('intval', str_split($number));

echo implode(', ', array_reverse($numberArray)); //