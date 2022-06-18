<?php

$insertMin = (int)readline ('Min?: ') . PHP_EOL;
$insertMax = (int)readline ('Max?: ') . PHP_EOL;

$range = range($insertMin, $insertMax);

foreach ($range as $rang) {
    echo $rang;
}


