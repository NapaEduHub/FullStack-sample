<?php

abstract class Animal {
    public $color;
    public $weight;

    public function info() {
        echo $this->color . " " . $this->weight;
    }

    abstract public function sound();

    public function jump()
    {

    }
}

class Cat extends Animal {
    public $jump_height;
}

class Kitty extends Cat {

}

class Dog extends Animal {
    public $speed;

    public function run()
    {

    }
}


$cat = new Cat();
$cat->color = "white";
$cat->weight = 500;
$cat->info();

echo "<br>";

$dog = new Dog();
$dog->color = "Black";
$dog->weight = 1000;
$dog->speed = 1000;
$dog->run();
$dog->info();
