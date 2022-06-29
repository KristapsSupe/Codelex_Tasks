<?php
/**echo "Geometry Calculator\n";
echo "1. Calculate the Area of a Circle";
echo "2. Calculate the Area of a Rectangle";
echo "3. Calculate the Area of a Triangle";
echo "4. Quit\n";
echo "Enter your choice (1-4) : ";*/


$pi = pi();



function circle(int $pi, int $radius): int
{
    return $pi * $radius * 2;
}


function rectangle(int $length, int $width): int
{
    return $length * $width;
}


function triangle(int $base, int $height): int
{
    return $base * $height * 0.5;
}


echo 'Geometry Calculator: ' . PHP_EOL;
echo PHP_EOL;
echo '1 - Calculate the Area of a Circle: ' . PHP_EOL;
echo '2 - Calculate the Area of a Rectangle: ' . PHP_EOL;
echo '3 - Calculate the Area of a Triangle: ' . PHP_EOL;
echo '4 - Quit: ' . PHP_EOL;

$selection = readline('Enter your choice (1-4): ');

switch ($selection) {
    case 1:
        $radius = readline('Enter radius: ');
        if ($radius < 0)
        {
            echo "Negative value" . PHP_EOL;
        }
        echo circle($pi, $radius) . PHP_EOL;
        break;

    case 2:
        $length = readline('Enter length: ');
        $width = readline('Enter width: ');
        if ($length < 0 || $width < 0)
        {
            echo "Negative value" . PHP_EOL;
        }
        echo rectangle($length, $width) . PHP_EOL;
        break;

    case 3:
        $base = readline('Enter length: ');
        $height = readline('Enter width: ');
        if ($base < 0 || $height < 0)
        {
            echo "Negative value" . PHP_EOL;
        }
        echo triangle($base, $height) . PHP_EOL;
        break;

    default:
        echo "Bye!";
        break;

}

