<?php

/**
 * You have decided to teach programming at a kindergarten, but you cannot understand half of what the children are saying.
 * Write a function that reverses all the words in a sentence that start with a particular letter.
 */

$sentence = "thank you for teaching us programming!";

$splittedSentences = explode(' ', $sentence);


if (array_filter($splittedSentences,)) {
    echo strrev($sentence);
};

echo $position = strpos($sentence, 't');



//class Kindergarten
//{
//
//    public static function translate(string $sentence): string
//    {
//        if (substr($sentence, 0, 1) === "t") {
//            $reversedSentence = strrev($sentence);
//        }
//        return $reversedSentence;
//    }
//}
//
//$sentence = "Thank you for teaching us programming!";
//
//echo Kindergarten:: translate($sentence);
