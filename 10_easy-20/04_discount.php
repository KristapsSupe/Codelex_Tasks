<?php

/**
 * Create a function that takes two arguments: the final price and the discount percentage as integers.
 * Return the final price after the discount.
 */

class Discount
{
    public static function discountPrice(float $price, float $discount): float
    {

        return  $price - ($price / 100 * $discount);

    }
}

$price = 7.00;
$discount = 20;

echo Discount:: discountPrice($price, $discount) . " $";