<?php
$word = readline ('Enter first word: ');
$word2 = readline ('Enter second word: ');

$dots = '.';
$output =  $word . $dots . $word2 . PHP_EOL;
$length = strlen($output);

$inTheMiddle = 30 - $length;


echo $word;

for ($i = 0; $i <= $inTheMiddle; $i++)
{
    echo $dots;
}

echo $word2 . PHP_EOL;



