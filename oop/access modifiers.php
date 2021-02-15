<?php

// Encapsulation

class Car
{
    public $model;
    protected $name;
    private $weight;

    public function some()
    {
        $this->weight = 10;
    }
}

class Bmw extends Car
{
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}


$bmw = new Bmw();
$bmw->setName("SuperCar");
echo $bmw->getName();


exit();
class Animal
{

}

$obj = new Car();

var_dump($obj instanceof Animal);
