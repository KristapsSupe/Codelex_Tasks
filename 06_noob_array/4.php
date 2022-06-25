<?php
$names = ["john", "JACOB", "jinGleHeimer", "schmidt"];

$toLowercaseLetters = array_map(fn ($toLowercaseLetter) => strtolower($toLowercaseLetter), $names);

$firstUppercases = array_map(fn ($toUppercase) => ucfirst($toUppercase), $toLowercaseLetters);

print_r($firstUppercases);