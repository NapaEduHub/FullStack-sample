<?php

// OOP - OYD

class Cat
{
    public $color = "white";
    public $weight = 1000;
    public $legs = 4;
    public $speed = 10;
    public $position = 0;

    public function __construct($color, $weight, $legs, $speed)
    {
        $this->color = $color;
        $this->weight = $weight;
        $this->legs = $legs;
        $this->speed = $speed;
    }

    public function __destruct()
    {

    }

    public function sound()
    {
        echo "meow";
    }

    public function eat()
    {
        $this->weight += $this->weight * 0.02;
    }

    public function run()
    {
        $this->position += $this->speed;
        $this->weight -= $this->weight * 0.01;
    }

    public function info()
    {
        echo "Color: " . $this->color . "<br>";
        echo "Weight: " . $this->weight . "<br>";
        echo "Legs: " . $this->legs . "<br>";
        echo "Speed: " . $this->speed . "<br>";
        echo "Position: " . $this->position . "<br>";
    }
}

$cat = new Cat("black", 500, 4, 6);
$cat2 = new Cat("brown", 1500, 4, 15);
$cat3 = new Cat("white", 800, 3, 2);
$cat->info();

echo $cat->position . "<br>";
$cat->run();
echo $cat->position . "<br>";
$cat->run();
echo $cat->position . "<br>";

echo "<hr>";

$cat2->info();

echo $cat2->position . "<br>";
$cat2->run();
echo $cat2->position . "<br>";
$cat2->run();
echo $cat2->position . "<br>";

echo "<hr>";
$cat3->info();

for ($i = 0; $i < 20; $i++) {
    $cat3->eat();
    $cat3->run();
}

$cat3->info();