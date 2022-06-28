<?php

function checkExam (array $a, array $b): int
{

    $pointsCorrect = 4;
    $pointsWrong = -1;

    $wrongAnswers = array_diff_assoc($b, $a);
    $points = (count($a) - count($wrongAnswers)) * $pointsCorrect;
    $points += (count($wrongAnswers) - (count($b) - count(array_filter($b)))) * $pointsWrong;

return max($points, 0);

}

echo checkExam(["a", "a", "b", "b"], ["a", "c", "b", "d"]); // => 6
echo PHP_EOL;
echo checkExam(["a", "a", "c", "b"], ["a", "a", "b", ""]); // => 7
echo PHP_EOL;
echo checkExam(["a", "a", "b", "c"], ["a", "a", "b", "c"]); // => 16
echo PHP_EOL;
echo checkExam(["b", "c", "b", "a"], ["", "a", "a", "c"]); // => 0
echo PHP_EOL;
