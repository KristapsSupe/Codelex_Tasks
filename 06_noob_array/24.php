<?php

$word = readline("Enter your word: ");

$splittedString = str_split($word,  1);

$implodedSplittedString = implode(',', $splittedString);

$eachElementInArray = array_count_values(explode(',', $implodedSplittedString));


print_r($eachElementInArray) . PHP_EOL;

