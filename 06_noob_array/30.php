<?php

$userNumber = readline("Enter number: ");

$number = range(1, $userNumber);

echo implode(',', $number);