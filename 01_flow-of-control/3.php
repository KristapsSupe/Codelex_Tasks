<?php
//Write a program that reads an positive integer
//and count the number of digits the number has.

$enteredNumber = readline("Enter the number: " );

if ($enteredNumber >= 0){
    echo "Positive number" . PHP_EOL;
}
if ($enteredNumber < 0) {
    echo "Negative number"  . PHP_EOL;
}

function countDigits($enteredNumber){
    $enteredNumber = (int)abs($enteredNumber); //The abs() function in PHP is identical to what we call modulus in mathematics. The modulus or absolute value of a negative number is positive.
    return strlen($enteredNumber);
}

echo "$enteredNumber contains: " . countDigits($enteredNumber) . " digits" . PHP_EOL;