<?php
/**Write a program that calculates and displays a person's body mass index (BMI).
 * A person's BMI is calculated with the following formula:
 * BMI = weight x 703 / height ^ 2.
 * Where weight is measured in pounds and height is measured in inches.
 * Display a message indicating whether the person has optimal weight, is underweight, or is overweight.
 * A sedentary person's weight is considered optimal if his or her BMI is between 18.5 and 25.
 * If the BMI is less than 18.5, the person is considered underweight.
 * If the BMI value is greater than 25, the person is considered overweight.
 * Your program must accept metric units.*/

$weightMet = 90;
$heightMet = 186;

function centimetersToInches(int $heightMet): int
{
    return ($heightMet * 0.01) * 39.3700787;
}
    echo centimetersToInches($heightMet) . " inches" . PHP_EOL;


function kilogramsToPounds(int $weightMet): int
{
    return $weightMet * 2.20462;
}
    echo kilogramsToPounds($weightMet) . " pounds" . PHP_EOL;


$pounds = kilogramsToPounds($weightMet);
$inches = centimetersToInches($heightMet);

function BMI(int $pounds, int $inches): int
{
    return ($pounds * 703) / ($inches * $inches);
}
    echo BMI($pounds, $inches) . " BMI" . PHP_EOL;

    if (BMI($pounds, $inches) < 18.5)
{
    echo "You are underweight because your BMI is " . BMI($pounds, $inches) . PHP_EOL;
}
    elseif (BMI($pounds, $inches) > 25)
{
    echo "You are overweight because your BMI is " . BMI($pounds, $inches) . PHP_EOL;
}
    else
{
    echo " Your BMI is " . BMI($pounds, $inches) . " and its good" . PHP_EOL;
}