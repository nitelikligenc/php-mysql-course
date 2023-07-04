<?php

use Services\AbstractClass\Animal;
use Services\Interfaces\Arabirim;

class Bird extends Animal implements Arabirim
{
    public function speak()
    {
        echo "Kuş cikledi <br>";
    }

    public function move()
    {
        echo "Kuş uçtu <br>";
    }

    public function getAnimalAttr()
    {
        echo "Kuşlar özgür ve nazik canlılardır! <br>";
    }
}