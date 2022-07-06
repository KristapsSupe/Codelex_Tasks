<?php

$numbers = [2, 5, 100];

$doubleNumbers = array_map(fn ($doubleNumber) => $doubleNumber * 2, $numbers);

echo implode(', ', $doubleNumbers);

