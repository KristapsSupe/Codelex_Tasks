<?php
class Dog
{
    private string $name;
    private string $gender;
    private ?Dog $mother;
    private ?Dog $father;

    public function __construct(string $name, string $gender, Dog $mother = null, Dog $father = null)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->mother = $mother;
        $this->father = $father;

    }
    public function fatherName(): string {
        if (! $this->father) return "Unknown";

        return $this->father->name;
    }
    public function hasTheSameMotherAs(Dog $otherDog): bool {
        return $this->mother === $otherDog->mother;
    }
}

$dogs = [
    $max = new Dog('Max', 'Male'),
    $sparky = new Dog('Sparky', 'Male'),
    $sam = new Dog('Sam', 'Male'),
    $lady = new Dog('Lady', 'Female'),
    $molly = new Dog('Molly', 'Female'),

    $buster = new Dog('Buster', 'Male',$lady, $sparky),
    $rocky =  new Dog('Rocky', 'Male', $molly, $sam),
    $max = new Dog('Max', 'Male',$lady, $rocky),
    $coco = new Dog('Coco', 'Female',$molly, $buster),
];

var_dump($coco->hasTheSameMotherAs($rocky));