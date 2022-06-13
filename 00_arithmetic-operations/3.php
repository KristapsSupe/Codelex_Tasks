<?php

$var1 = 1;
$var2 = 100;

echo "The sum of " . $var1 . " to " . $var2 . " is " . array_sum(range($var1, $var2)) . PHP_EOL;
echo "The average is " . array_sum(range($var1, $var2)) / count(range($var1, $var2));

// sis bija salidzinosi vienkarsi