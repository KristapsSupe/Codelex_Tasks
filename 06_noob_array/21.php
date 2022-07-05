<?php
$persons = [
    ["name" => "Bob", "age" => 30, "voted" => true],
    ["name" => "Jake", "age" => 32, "voted" => true],
    ["name" => "Kate", "age" => 25, "voted" => false],
    ["name" => "Sam", "age" => 20, "voted" => false],
    ["name" => "Phil", "age" => 21, "voted" => true],
    ["name" => "Ed", "age" => 55, "voted" => true],
    ["name" => "Tami", "age" => 54, "voted" => true],
    ["name" => "Mary", "age" => 31, "voted" => false],
    ["name" => "Becky", "age" => 43, "voted" => false],
    ["name" => "Joey", "age" => 41, "voted" => true],
    ["name" => "Jeff", "age" => 30, "voted" => true],
    ["name" => "Zack", "age" => 19, "voted" => false],
];

$youngVotersTotal = array_filter($persons, function($x) {
    return  $x["age"] <= 25;
});
$youngVotersVoted = array_filter($persons, function($x) {
    return  $x["age"] <= 25 && $x["voted"] === true;
});


$midVotersTotal = array_filter($persons, function($x) {
    return  $x["age"] >= 26 && $x["age"] <= 35;
});
$midVotersVoted = array_filter($persons, function($x) {
    return  $x["age"] >= 26 && $x["age"] <= 35 && $x["voted"] === true;
});


$oldVotersTotal = array_filter($persons, function($x) {
    return  $x["age"] >= 36;
});
$oldVotersVoted = array_filter($persons, function($x) {
    return  $x["age"] >= 36 && $x["voted"] === true;
});

echo "Young Voters Total: "  . count($youngVotersTotal) . PHP_EOL;
echo "Young Voters Voted: "  . count($youngVotersVoted) . PHP_EOL;

echo "Mid Voters Total: "  . count($midVotersTotal) . PHP_EOL;
echo "Mid Voters Voted: "  . count($midVotersVoted) . PHP_EOL;

echo "Old Voters Total: "  . count($oldVotersTotal) . PHP_EOL;
echo "Old Voters Voted: "  . count($oldVotersVoted) . PHP_EOL;

//var_dump($youngVotersVoted);
//var_dump($midVotersVoted);
//var_dump($oldVotersVoted);
