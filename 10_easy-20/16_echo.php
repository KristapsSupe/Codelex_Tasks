<?php

//test("should return the given text repeated n times", () => {
//    expect(echo("ab", 3)).toEqual("ababab");
//        expect(echo("kiwi", 1)).toEqual("kiwi");
//        expect(echo("cherry", 2)).toEqual("cherrycherry");

class EchoString
{
    public static function repeat(string $word, int $number): string
    {

        $echoString = str_repeat($word, $number);;

        return $echoString;
    }
}

echo EchoString::repeat("ab", 3) . PHP_EOL;
echo EchoString::repeat("kiwi", 3) . PHP_EOL;
echo EchoString::repeat("cherry", 3) . PHP_EOL;


