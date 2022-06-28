<?php

function swapCase(string $text): string
{
    $text = explode(' ', $text);

    $text = array_map(function($i, $word) {
        if ($i % 2 === 0) {
            return strtoupper($word);
        }
        return $word;

    },  array_keys($text), $text);

    return implode(', ', $text);
}

echo swapCase("hey gurl, lets php together sometime");
echo PHP_EOL;
