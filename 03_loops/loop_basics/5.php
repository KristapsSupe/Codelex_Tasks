<?php

$Kristaps = new stdClass();
$Kristaps->name = 'Kristaps';
$Kristaps->surname = 'Supe';
$Kristaps->age = 30;
$Kristaps->birthday = '10.10.1992.';

$Janis = new stdClass();
$Janis->name = 'Jānis';
$Janis->surname = 'Zariņš';
$Janis->age = 32;
$Janis->birthday = '12.09.1990.';

$persons = [
    $Janis, $Kristaps
];

foreach ($persons as $person)
{
   echo "$person->name $person->surname $person->age $person->birthday";
}
