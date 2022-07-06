<?php
$words = ["dog", "wolf", "by", "family", "eaten", "camping"];

function fiveCharactersOrFewerOnly(string $word): string {
    return strlen($word) <= 5;
}

$wordsOverFiveChars = array_filter($words, "fiveCharactersOrFewerOnly");

echo implode(', ', $wordsOverFiveChars);