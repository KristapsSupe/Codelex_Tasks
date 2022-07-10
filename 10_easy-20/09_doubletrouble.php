<?php
/**
 * You are organizing an event and asked people to add their name to a list, if they want to attend.
 * But, oh no, some people wrote their name twice.
 * Create a function that takes an array of items, removes all duplicate items and
 * returns a new array in the same sequential order as the old array (minus duplicates).
 */

class Event
{

    public static function takeOutDoubles(array $attendees): string
    {
        $cleanList = array_unique($attendees,);
        return implode('/ ', array_unique($cleanList));
    }
}

$attendees = ['Andre', 'John', 'Michael', 'Peter', 'John', 'Jasmin'];

echo Event:: takeOutDoubles($attendees);