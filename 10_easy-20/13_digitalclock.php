<?php

/**
 * Write a function that takes the number of seconds and returns the digital format clock time as a string.
 * Time should be counted from 00:00:00.
 */

class Clock
{

    public static function takeOutDoubles(array $attendees): string
    {
        $cleanList = array_unique($attendees,);
        return implode('/ ', array_unique($cleanList));
    }
}

$seconds = 120;

echo Event:: takeOutDoubles($attendees);
