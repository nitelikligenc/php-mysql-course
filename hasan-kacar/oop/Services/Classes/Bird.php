<?php

namespace OOP\Test\Bird;

use Animal;
class Bird extends Animal
{
    public $attribute;

    public function __construct($attribute)
    {
        $this->attribute = $attribute;
    }

    public function move()
    {
        echo "Birds are fly on the world";
    }
}