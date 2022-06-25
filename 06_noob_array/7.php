<?php
$numbers = [1, -4, 7, 12];

$total = array_sum(array_filter($numbers, function ($num){
    return $num > 0;
}));
echo $total;
