<?php
// ABC(2), DEF(3), GHI(4), JKL(5), MNO(6), PQRS(7), TUV(8), WXYZ(9).
//
//Write a program called PhoneKeyPad,
//which prompts user for a String (case insensitive),
//and converts to a sequence of keypad digits.

$userWord = (string) readline ('Enter your word: ');

function wordToDigits($userWord){
    $words = str_split($userWord, 1);
    $numberCode = ' ';
    foreach($words as $word){
        switch($word){
            case 'a':
                echo '2';
                break;
            case 'b':
                echo '22';
                break;
            case 'c':
                echo '222';
                break;
            case 'd':
                echo'3';
                break;
            case 'e':
                echo '33';
                break;
            case 'f':
                echo '333';
                break;
            case 'g':
                echo '4';
                break;
            case 'h':
                echo '44';
                break;
            case 'i':
                echo '444';
                break;
            case 'j':
                echo '5';
                break;
            case 'k':
                echo '55';
                break;
            case 'l':
                echo '555';
                break;
            case 'm':
                echo '6';
                break;
            case 'n':
                echo '66';
                break;
            case 'o':
                echo '666';
                break;
            case 'p':
                echo '7';
                break;
            case 'q':
                echo '77';
                break;
            case 'r':
                echo '777';
                break;
            case 's':
                echo '7777';
                break;
            case 't':
                echo '8';
                break;
            case 'u':
                echo '88';
                break;
            case 'v':
                echo '888';
                break;
            case 'w':
                echo '9';
                break;
            case 'x':
                echo'99';
                break;
            case 'y':
                echo '999';
                break;
            case 'z':
                echo '9999';
                break;
        }
    }
    return $numberCode;
}

echo wordToDigits($userWord) . PHP_EOL;

