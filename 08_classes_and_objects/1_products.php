<?php

class Product
{
    private string $name;
    private float $startPrice;
    public int $amount;


    public function __construct(string $name, float $startPrice, int $amount)
    {
        $this->name = $name;
        $this->startPrice = $startPrice;
        $this->amount = $amount;
    }

    public function getName(): string
    {
       return $this->name;
    }

    public function getStartPrice(): string
    {
        return $this->startPrice;
    }

    public function getAmount(): string
    {
        return $this->amount;
    }

    public function printProduct()
    {
        echo "Name: " . $this->name, " Price: " . $this->startPrice, " Amount: " . $this->amount . PHP_EOL;
    }
}


$products = new Product('Logitech mouse', 70.00, 14);
$products2 = new Product('iPhone 5s', 999.99, 3);
$products3 = new Product('Epson EB-U05', 440.46, 1);


$products->printProduct();
$products2->printProduct();
$products3->printProduct();



