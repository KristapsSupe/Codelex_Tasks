<?php
$userNumber = readline('Enter your number: ');
$centerDots = $userNumber;
$sideDots = 0;

for($i = 0; $i < $userNumber -2; $i++)
{
    echo str_repeat('.', $sideDots);
    echo '*';
    echo str_repeat('.', $centerDots);
    echo '*';
    echo str_repeat('.', $sideDots);


    $sideDots++;
    $centerDots -= 2;

    echo $centerDots;

    echo PHP_EOL;

}

$evenCenterStar = 1;

if($userNumber % 2 === 0)
{
    $evenCenterStar ++;
}
echo str_repeat('.', $sideDots);
echo str_repeat('*', $evenCenterStar);
echo str_repeat('.', $sideDots);
echo PHP_EOL;

for($i = 0; $i < $userNumber -2; $i++)
{
    $sideDots--;
    $centerDots += 2;

    echo str_repeat('.', $sideDots);
    echo '*';
    echo str_repeat('.', $centerDots);
    echo '*';
    echo str_repeat('.', $sideDots);


    echo PHP_EOL;
}




