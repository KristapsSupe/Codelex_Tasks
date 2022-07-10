<?php

//describe("cashier function", () => {
//    test("should return the total price of all groceries", () => {
//        expect(cashier([
//            { product: "Milk", quantity: 1, price: 1.50 }
//        ])).toEqual(1.5);
//        expect(cashier([
//            { product: "Milk", quantity: 1, price: 1.50 },
//            { product: "Cereals", quantity: 1, price: 2.50 }
//        ])).toEqual(4);
//        expect(cashier([
//            { product: "Milk", quantity: 1, price: 1.50 },
//            { product: "Eggs", quantity: 12, price: 0.10 },
//            { product: "Bread", quantity: 2, price: 1.60 },
//            { product: "Cheese", quantity: 1, price: 4.50 }
//        ])).toEqual(10.4);

class Cashier
{
    public static function totalSum(array $items): string
    {
        foreach($items as $singleGroupOfProducts) {
            $sum[] = $singleGroupOfProducts["quantity"] * $singleGroupOfProducts["price"];
        }
        return array_sum($sum);
    }
}

$items1 =
    [
        ["product" => "Milk", "quantity" => 1, "price" => 1.50],
    ];

$items2 =
    [
        ["product" => "Milk", "quantity" => 1, "price" => 1.50],
        ["product" => "Cereals", "quantity" => 1, "price" => 2.50],
    ];

$items3 =
    [
        ["product" => "Milk", "quantity" => 1, "price" => 1.50],
        ["product" => "Eggs", "quantity" => 12, "price" => 0.10],
        ["product" => "Bread", "quantity" => 2, "price" => 1.60],
        ["product" => "Cheese", "quantity" => 1, "price" => 4.50],
    ];


echo Cashier:: totalSum($items1) . " $" . PHP_EOL;
echo Cashier:: totalSum($items2) . " $" . PHP_EOL;
echo Cashier:: totalSum($items3) . " $" . PHP_EOL;


