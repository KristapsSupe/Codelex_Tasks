<?php
$numbers = [1, 2, 2];

$squareNumbers = array_map(fn ($squareNumber) => $squareNumber * $squareNumber, $numbers);

$sum = array_sum($squareNumbers);

echo $sum;