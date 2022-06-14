<?php

$persons = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ],
        [
            "name" => "Lady",
            "surname" => "Doe",
            "age" => 17
        ]
    ]
];


function age(int $a): bool
{
    return $a >= 18;
}
if (age($persons[0][0]["age"])) {
    echo "Reached age of 18; ";

}   if (age($persons[0][1]["age"])) {
    echo "Reached age of 18; ";

}   if (age($persons[0][2]["age"])) {
    echo "Reached age of 18; ";

} else {
    echo "Not reached age of 18; ";

}

// meginaju taisit ar foreach, bet ka var izveidot universalu key, lai loop cauri visiem objektiem?