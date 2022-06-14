<?php


$person = [
    "name" => "John",
    "surname" => "Doe",
    "age" => 50
];

function age(int $a): bool
{
    return $a > 18;
}

if (age($person["age"])) {
    echo "Reached age of 18";

} else {
    echo "Not reached age of 18";
}
