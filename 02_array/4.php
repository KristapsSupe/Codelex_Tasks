<?php

for ($i = 0; $i < 10; $i++){
    $numbers[$i] = rand(0, 100);
}

$copyNumbers = $numbers;
$numbers[count($numbers)-1] = -7;

echo 'Array 1: ' . implode(', ', $numbers) . PHP_EOL;
echo 'Array 2: ' . implode(', ', $copyNumbers);