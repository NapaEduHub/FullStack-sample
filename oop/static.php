<?php


class Animal {

    public static $some;

    public function run()
    {

    }

    public static function new()
    {
        return new self;
    }
}

$animal = new Animal();

$animal->run();


$animal2 = Animal::new();

