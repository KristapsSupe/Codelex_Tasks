<?php

$elements = [
    10, 20, 30, 99.99, 'codelex'
];

function makeItDouble(int $number): int
{
    return $number * 2;
}

for ($i = 0; $i < count($elements); $i++)
{
    if (is_integer($elements[$i])) {
        echo makeItDouble($elements[$i]) . PHP_EOL;
    }
}

