<?php

$days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

$userChoice = (int) readline('Choose a day (enter from 0-6): ');


if ($userChoice > 6 || $userChoice < 0) {
    echo "Not a valid choice" . PHP_EOL;
    exit;
}
if ($userChoice == 0) {
    echo $days[0];
    exit;
}

if ($userChoice == 1) {
    echo $days[1];
    exit;
}
if ($userChoice == 2) {
    echo $days[2];
    exit;
}
if ($userChoice == 3) {
    echo $days[3];
    exit;
}
if ($userChoice == 4) {
    echo $days[4];
    exit;
}
if ($userChoice == 5) {
    echo $days[5];
    exit;
}
if ($userChoice == 6) {
    echo $days[6];
    exit;
}

