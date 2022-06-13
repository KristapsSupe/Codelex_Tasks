<?php
/**echo "Geometry Calculator\n";
echo "1. Calculate the Area of a Circle";
echo "2. Calculate the Area of a Rectangle";
echo "3. Calculate the Area of a Triangle";
echo "4. Quit\n";
echo "Enter your choice (1-4) : ";*/


$radius = 10;
$pi = pi();

$length = 50;
$width = 10;

$base = 20;
$height = 30;


    function circle(int $pi, int $radius): int
    {
        return $pi * $radius * 2;
    }
if ($radius < 0)
{
echo "Negative value" . PHP_EOL;
}

else
{
    echo circle($pi, $radius) . PHP_EOL;
}


function rectangle(int $length, int $width): int
{
    return $length * $width;
}

if ($length < 0 || $width < 0) {
    echo "Negative value" . PHP_EOL;
} else {
    echo rectangle($length, $width) . PHP_EOL;
}


function triangle(int $base, int $height): int
{
    return $base * $height * 0.5;
}

if ($base < 0 || $height < 0) {
    echo "Negative value" . PHP_EOL;
} else {
    echo triangle($base, $height) . PHP_EOL;
}

// jauztaisa klase