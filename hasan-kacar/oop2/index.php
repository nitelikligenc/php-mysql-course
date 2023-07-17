<?php

require_once(__DIR__ . '/Services/AbstractClass/Animal.php');
require_once(__DIR__ . '/Services/Interfaces/Arabirim.php');
require_once(__DIR__ . '/Services/Classes/Bird.php');
require_once(__DIR__ . '/Services/Classes/Lion.php');

use Services\Classes\Lion;

$bird = new Bird();
$lion = new Lion();

$bird->speak();
$bird->move();
$bird->getAnimalAttr();

$lion->speak();
$lion->move();
$lion->getAnimalAttr();


session_start();
ob_start();

$_SESSION["test"] = "Hasan Kacar";
setcookie("test", "Hasan Kacar");
