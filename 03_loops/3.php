<?php
$word = readline ('Enter first word: ');
echo $word . PHP_EOL;

$word2 = readline ('Enter second word: ');
echo $word2 . PHP_EOL;;

$output =  $word . "" . $word2 . PHP_EOL;
$length = strlen($output);
$dots = ".";
$i = $dots;


if($length <= 30)
{
        echo $word . $i . $word2 . PHP_EOL;
}

// trukst punktu skaititajs, lai kopejais stringa garums butu 30