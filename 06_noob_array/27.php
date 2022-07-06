<?php

$searchedWord = 'needle';

$findNeedle = ['hay', 'junk', 'hay', 'hay', 'moreJunk', 'needle', 'randomJunk']; // should return "found the needle at position 5"

$needle = array_search($searchedWord, $findNeedle, true);

echo "Found the " . $searchedWord . " at position " . $needle;