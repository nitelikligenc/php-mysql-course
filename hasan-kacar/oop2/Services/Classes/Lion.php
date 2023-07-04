<?php
namespace Services\Classes;

use Services\AbstractClass\Animal;
use Services\Interfaces\Arabirim;

class Lion extends Animal implements Arabirim
{

    public function speak()
    {
        echo "Aslan kükredi <br>";
    }

    public function move()
    {
        echo "Aslan koştu <br>";
    }

    public function getAnimalAttr()
    {
        echo "Aslan büyük ve güçlü bir hayvandır! <br>";
    }
}