<?php

$acceleration = -9.81;
$time = 10;
$initialV = 0;
$initialP = 0;

echo 0.5 * $acceleration * ($time * $time) + $initialV * $time + $initialP . " m " . PHP_EOL;


function gravity(int $acceleration, int $time, int $initialV, int $initialP): int
{
    return 0.5 * $acceleration * ($time * $time) + $initialV * $time + $initialP;
}
    echo gravity($acceleration, $time, $initialV, $initialP) . " m " . PHP_EOL; // izmet -450 m, kapec?