<?php



$checkStringOne = "abcd";
$checkStringTwo = "efghi";

$elementToSearchOne = "b";
$elementToSearchTwo = "a";

if (strpos($checkStringOne, $elementToSearchOne) !== false) {
    echo 'true' . PHP_EOL;
} else
    echo 'false' . PHP_EOL;;

if (strpos($checkStringTwo, $elementToSearchTwo) !== false) {
    echo 'true' . PHP_EOL;;
} else
    echo 'false' . PHP_EOL;;

