<?php
$numbers = [2, 5, 100];

$numbersToStrings = array_map(fn ($numberToString) => strval($numberToString), $numbers);

print_r($numbersToStrings);

var_dump($numbersToStrings);