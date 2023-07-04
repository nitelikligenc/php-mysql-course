<?php
class OrnekAyracı{
    function ayracıYaz()
    {
        echo "<br><br>************************************************<br><br>";
    }
}

$ornekAyracı = new OrnekAyracı();

/** Ornek 1 - Start */
class EkranaYaz{
    public function helloWorld()
    {
        echo "Hello World";
    }
}

$ekranaYaz = new EkranaYaz();

$ekranaYaz->helloWorld();
/** Ornek 1 - End */

$ornekAyracı->ayracıYaz();

/** Ornek 2 - Start */
class BenimIstedigimiYaz{
    public $text;

    function textYaz()
    {
        echo $this->text;
    }
}

$textiYaz =  new BenimIstedigimiYaz();
$textiYaz->text = "Benim Istediğim Rastgele İçerik";
$textiYaz->textYaz();
/** Ornek 2 - End */



$ornekAyracı->ayracıYaz();

/** Ornek 3 - Start */
class PrivateDeneme{
    private $privateText;

    public function __construct($privateText)
    {
        $this->privateText = $privateText;
    }

    function privateEkranaYaz()
    {
        echo $this->privateText;
    }
}


$privateDeneme = new PrivateDeneme("Deneme");
$privateDeneme->privateEkranaYaz();
/** Ornek 3 - End */



$ornekAyracı->ayracıYaz();

/** Ornek 4 - Start */
class GetterSetterTest{
    private $yazi;

    function getterSetterEkranaYaz()
    {
        echo $this->yazi;
    }

    public function getYazi()
    {
        return $this->yazi;
    }

    public function setYazi($text)
    {
        $this->yazi = $text;
    }
}

$getterSetterTest = new GetterSetterTest();
$getterSetterTest->setYazi("Deneme");
$privateText = $getterSetterTest->getYazi();
echo $privateText;
/** Ornek 4 - End */


$ornekAyracı->ayracıYaz();

/** Ornek 5 - Start */
class Toplama{
    private $a;
    private $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function topla()
    {
        return $this->a + $this->b;
    }
}

$classTopla = new Toplama(10, 5);
$toplamDeger = $classTopla->topla();
echo "Toplam Değer : $toplamDeger";
/** Ornek 5 - End */

$ornekAyracı->ayracıYaz();

/** Ornek 6 - Start */
class Carpma{
    private $a;
    private $b;

    public function getA()
    {
        return $this->a;
    }

    public function setA($a)
    {
        $this->a = $a;
    }

    public function getB()
    {
        return $this->b;
    }

    public function setB($b)
    {
        $this->b = $b;
    }

    public function carpimSonucu()
    {
        return $this->a * $this->b;
    }
}

$carpma = new Carpma();
$carpma->setA(5);

$carpma->setA(10);
$carpma->setB(5);

$a = $carpma->getA();
$b = $carpma->getB();

$sonuc = $carpma->carpimSonucu();

echo "A Degeri : $a <br> B Degeri : $b <br> Çarpım Sonucu : $sonuc";
/** Ornek 6 - End */