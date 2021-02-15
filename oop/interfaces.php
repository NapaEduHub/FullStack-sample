<?php


interface Runnable
{
    public function run();
}

interface Jumper
{
    public function jump();
}

class Dog implements Runnable
{
    public function run()
    {
        // TODO: Implement run() method.
    }
}

class Rabbit implements Runnable, Jumper
{
    public function run()
    {

    }

    public function jump()
    {

    }
}

class Human implements Runnable
{
    public function run()
    {
        // TODO: Implement run() method.
    }
}


class Robot implements Runnable
{
    public function run()
    {
        // TODO: Implement run() method.
    }
}


function some(Runnable $r)
{
    return $r->run();
}

echo some(17, '12');
