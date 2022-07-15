<?php
class EnergyDrink
{

    private int $surveyed;
    private float $purchasedEnergyDrinksPercentage;
    private float $preferCitrusDrinksPercentage;
    private float $purchasedEnergyDrinks;
    private float $preferCitrusDrinks;

    public function __construct(int $surveyed, float $purchasedEnergyDrinksPercentage, float $purchasedEnergyDrinks, float $preferCitrusDrinksPercentage, float $preferCitrusDrinks)
    {
        $this->surveyed = $surveyed;
        $this->purchasedEnergyDrinksPercentage = $purchasedEnergyDrinksPercentage;
        $this->preferCitrusDrinksPercentage = $preferCitrusDrinksPercentage;
        $this->purchasedEnergyDrinks = $purchasedEnergyDrinks;
        $this->preferCitrusDrinks = $preferCitrusDrinks;
    }

    function calculateEnergyDrinkers(int $surveyed, float $purchasedEnergyDrinksPercentage): int
    {
        $this->purchasedEnergyDrinks = $this->surveyed * $this->purchasedEnergyDrinksPercentage;
        return floor($this->purchasedEnergyDrinks);
    }

    function calculatePreferCitrus(float $purchasedEnergyDrinks, float $preferCitrusDrinksPercentage): int
    {
        $this->preferCitrusDrinks = $this->purchasedEnergyDrinks * $this->preferCitrusDrinksPercentage;
        return floor($this->preferCitrusDrinks);
    }

}

$surveyed = 12467;
$purchasedEnergyDrinksPercentage = 0.14;
$preferCitrusDrinksPercentage = 0.64;
$purchasedEnergyDrinks = $surveyed * $purchasedEnergyDrinksPercentage;
$preferCitrusDrinks = $purchasedEnergyDrinks * $preferCitrusDrinksPercentage;


$energyDrinkUsers = new EnergyDrink($surveyed, $purchasedEnergyDrinksPercentage, $preferCitrusDrinksPercentage, $purchasedEnergyDrinks, $preferCitrusDrinks);
$citrusEnergyDrinkUsers = new EnergyDrink($surveyed, $purchasedEnergyDrinksPercentage, $preferCitrusDrinksPercentage, $purchasedEnergyDrinks, $preferCitrusDrinks);

echo "Total number of people surveyed " . $surveyed . PHP_EOL;
echo "Approximately " . $energyDrinkUsers->calculateEnergyDrinkers($surveyed, $purchasedEnergyDrinksPercentage) . " bought at least one energy drink" . PHP_EOL;
echo $citrusEnergyDrinkUsers->calculatePreferCitrus($purchasedEnergyDrinks, $preferCitrusDrinksPercentage ) . " of those " . "prefer citrus flavored energy drinks."  . PHP_EOL;





//
//$surveyed = 12467;
//$purchasedEnergyDrinksPercentage = 0.14;
//$preferCitrusDrinksPercentage = 0.64;
//$purchasedEnergyDrinks = $surveyed * $purchasedEnergyDrinksPercentage;
//
//function calculateEnergyDrinkers(int $surveyed, float $purchasedEnergyDrinksPercentage): int
//{
//    $purchasedEnergyDrinks = $surveyed * $purchasedEnergyDrinksPercentage;
//    return floor($purchasedEnergyDrinks);
//}
//
//function calculatePreferCitrus(float $purchasedEnergyDrinks, float $preferCitrusDrinksPercentage): int
//{
//    $preferCitrusDrinks = $purchasedEnergyDrinks * $preferCitrusDrinksPercentage;
//    return floor($preferCitrusDrinks);
//}
//
//
//echo "Total number of people surveyed " . $surveyed . PHP_EOL;
//echo "Approximately " . calculateEnergyDrinkers($surveyed, $purchasedEnergyDrinksPercentage) . " bought at least one energy drink" . PHP_EOL;
//echo calculatePreferCitrus($purchasedEnergyDrinks, $preferCitrusDrinksPercentage ) . " of those " . "prefer citrus flavored energy drinks."  . PHP_EOL;
