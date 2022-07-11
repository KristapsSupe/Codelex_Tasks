<?php

/**
 * You have decided to teach programming at a kindergarten, but you cannot understand half of what the children are saying.
 * Write a function that reverses all the words in a sentence that start with a particular letter.
 */

//$sentence = "First man to walk on the moon";
//$letter = "m";
//
//$splittedSentences = explode(' ', $sentence);
//
//foreach ($splittedSentences as $word) {
//    if (substr($word, 0, 1) === $letter)
//        echo strrev($word) . " ";
//    else {
//        echo $word  . " ";
//    }
//}








class Kindergarten
{

    public static function translate(string $sentence, string $letter): string
    {
        $splittedSentences = explode(' ', $sentence);

        foreach ($splittedSentences as $word) {
            if (substr($word, 0, 1) === $letter)
                echo strrev($word) . " ";
            else {
                echo $word  . " ";
            }
        }
        return "";
    }

}

echo Kindergarten:: translate("First man to walk on the moon", "m" ) . PHP_EOL;
echo Kindergarten:: translate("Peter ate pepper", "p" ) . PHP_EOL;
echo Kindergarten:: translate("I picked pickled onions for supper", "p" ) . PHP_EOL;
