<?php
$userNumber = readline('Enter your number: ');

function alphabet($n)
{
    $num = 65;
    for ($i = 0; $i < $n; $i++)
    {
        for ($j = 0; $j <= $i; $j++ )
        {
            $ch = chr($num);
            echo $ch." ";
        }
        $num = $num + 1;

        echo PHP_EOL;
    }
}

$n = $userNumber;
alphabet($n);
