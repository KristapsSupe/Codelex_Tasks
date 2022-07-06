<?php

function shift($string, $distance) {
    $distance = $distance % 26;
    $string = strtolower($string);
    $result = array();
    $characters = str_split($string);

    if ($distance < 0) {
        $distance += 26;
    }

    foreach ($characters as $idx => $char) {
        $result[$idx] = chr(97 + (ord($char) - 97 + $distance) % 26);
    }

    return join("", $result);
}

echo shift('hello', 1);



