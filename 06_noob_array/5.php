<?php


$Angelina = new stdClass();
$Angelina -> name = "Angelina Jolie";
$Angelina -> age = 80;

$Eric = new stdClass();
$Eric -> name = "Eric Jones";
$Eric -> age = 2;

$Paris = new stdClass();
$Paris -> name = "Paris Hilton";
$Paris -> age = 5;

$Kanye = new stdClass();
$Kanye -> name = "Kanye West";
$Kanye -> age = 16;

$Bob = new stdClass();
$Bob -> name = "Bob Ziroll";
$Bob -> age = 100;


$persons = [$Angelina, $Eric, $Paris, $Kanye, $Bob];


foreach ($persons as $person) {
    echo $person->name . ', ';
}






