<?php
$arrays = [
    ["1", "2", "3"],
    [true],
    [4, 5, 6],
    ];

$arraySingle = call_user_func_array('array_merge', $arrays);

echo implode(', ', $arraySingle);

var_dump($arraySingle);


