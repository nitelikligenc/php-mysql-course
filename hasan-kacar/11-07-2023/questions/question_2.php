<?php

abstract class Animal
{
    public abstract function move();
}

class Bird extends Animal{

    public function move()
    {
        echo "Bird fly on the air every time <br>";
    }
}

class Lion extends Animal{
    public function move()
    {
        echo "Lion run on the floor every time <br>";
    }
}

$lion = new Lion();
$bird = new Bird();

$lion->move();
$bird->move();
