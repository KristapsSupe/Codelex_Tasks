<?php

/**
 * Write a function that takes the number of seconds and returns the digital format clock time as a string.
 * Time should be counted from 00:00:00.
 */

class Clock
{
    public static function digitalClock(int $seconds): string
    {
        return gmdate("H:i:s", $seconds);
    }
}

echo Clock:: digitalClock(121);