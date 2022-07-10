<?php

/**
 * Write a function that takes dog's age in human years as an argument and converts to dog years.
 * Return the result like so: "Your doggie is NN years old in dog years!"
 */

class DogAge
{
    public static function dogAgeInDogYears(int $age): int
    {
        return $age * 7;
    }

}

$age = (int) readline("Enter dog age: ");

echo DogAge:: dogAgeInDogYears($age);