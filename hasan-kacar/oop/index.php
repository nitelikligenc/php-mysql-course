<?php

require_once("Services/AbstractClass/Animal.php");
require_once("Services/Classes/Bird.php");
require_once("Services/Classes/Lion.php");

use OOP\Test\Bird\Bird;

$bird = new Bird("Test");
$lion = new Lion();

$bird->move();
echo "<br><br>****************************************<br><br>";
$bird->publicAttribute();
echo "<br><br>****************************************<br><br>";
$lion->move();
echo "<br><br>****************************************<br><br>";
$lion->publicAttribute();