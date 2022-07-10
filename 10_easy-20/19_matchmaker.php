<?php
//describe("matchMaker function", () => {
//    test("should return a new array of arrays with couples, if given array sizes match and 'Cupid is on vacation' if not ", () => {
//        expect(matchMaker(["Elise", "Mary"], ["John", "Rick"])).toEqual([["Elise", "John"], ["Mary", "Rick"]]);
//        expect(matchMaker(["Ana", "Amy", "Lisa"], ["Bob", "Josh"])).toEqual("Cupid is on vacation");
//        expect(matchMaker(["Ana", "Amy", "Lisa"], ["Bob", "Josh", "Tim"])).toEqual([["Ana", "Bob"], ["Amy", "Josh"],["Lisa", "Tim"]]);
//    });


class MatchMaker
{
    public static function makeAMatch(array $women, array $men): void
    {
        if (count($women) !== count($men)) {
            echo "Cupid is on vacation";
        } else {
            $a = (array_merge_recursive($women, $men));
                foreach ($a as $val) {
                    foreach ($val as $v) {
                        echo  $v . ", ";
                    }
                }
            }
    }
}

$firstBatchWomen = ["a" => "Elise", "b" => "Mary"];
$firstBatchMen = ["a" => "John", "b" =>  "Rick"];

$secondBatchWomen = ["a" => "Ana", "b" => "Amy", "c" => "Lisa"];
$secondBatchMen = ["a" => "Bob", "b" =>  "Josh"];

$thirdBatchWomen = ["a" => "Ana", "b" => "Amy", "c" => "Lisa"];
$thirdBatchMen = ["a" => "Bob", "b" =>  "Josh", "c" =>  "Tim"];



echo MatchMaker:: makeAMatch($firstBatchWomen, $firstBatchMen) . PHP_EOL;
echo MatchMaker:: makeAMatch($secondBatchWomen, $secondBatchMen) . PHP_EOL;
echo MatchMaker:: makeAMatch($thirdBatchWomen, $thirdBatchMen) . PHP_EOL;
