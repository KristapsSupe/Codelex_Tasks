<?php

function addCodelex(string $word, string $word2): string
{
    return "$word codelex, is the best." . ' ' . "$word2";
}
echo addCodelex('Hello', 'Do it!');