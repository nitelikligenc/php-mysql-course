<?php

class MyCustomClass{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function showName()
    {
        echo "Name : " . $this->name;
    }
}

$myCustomClass = new MyCustomClass("Hasan Kacar");
$myCustomClass->showName();
