<?php
/**
 * A family want's to go on a vacation, but don't know what is the total amount of money they can spend on the trip.
 * Create the function that takes an array with objects and returns the sum of people's budgets.
 */

class Vacation
{

    public static function budget(array $monthlyExpenditure, int $totalIncome): int
    {
        $expenses = array_sum(array_map(function($expense) {
            return $expense['expense'];
        }, $monthlyExpenditure));
        return $totalIncome - $expenses;
    }
}

$monthlyExpenditure = [
        ["position" => "utility", "expense" => 500],
        ["position" => "loan", "expense" => 500],
        ["position" => "grocery", "expense" => 500],
    ];

$totalIncome = 2000;

echo "On vacation you can spend " . Vacation:: budget($monthlyExpenditure, $totalIncome) . " $";
