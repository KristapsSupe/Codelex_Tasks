<?php
function isFifteen(int $a, int $b): bool
{
    return $a == 15 || $b == 15 || $a + $b == 15 || $a - $b == 15;
}

var_dump(isFifteen(10,5)); 
