<?php

$sheeps = ['sheep', 'sheep', 'sheep', 'sheep', 'sheep', 'wolf', 'sheep', 'sheep'];

$searchedWolf = 'wolf';
$searchedSheep = 'sheep';

$reverseOrderInArray = array_reverse($sheeps);

$wolfPositionInArray = array_search($searchedWolf, $reverseOrderInArray, true);

if($wolfPositionInArray == 0) {
    echo 'Pls go away and stop eating my sheep';
} else
    echo "Oi! Sheep number " . ($wolfPositionInArray + 1) . " you are about to be eaten";





//$checkWolfBeforeSheep =  current(array_slice($sheeps, array_search($searchedWolf, array_keys($sheeps)) + 1, 1));
//$sheepPosition = array_search($checkWolfBeforeSheep, $sheeps, true);
















