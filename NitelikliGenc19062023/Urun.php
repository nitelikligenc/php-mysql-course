<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

class Urun{

    public $adi;
    public $fiyati;
    public $kdvOran;

    public function __construct($urunAdi,$urunFiyati,$urunKdvOran)
    {
        $this->adi = $urunAdi;
        $this->fiyati = $urunFiyati;
        $this->kdvOran = $this->kdvOraniHesapla($urunKdvOran);
    }

    public function kdvOraniHesapla($kdvOrani)
    {
        return $this->fiyati * ($kdvOrani / 100);
    }
}

$ayakkabi = new Urun("Nike",1000,18);

echo "Adi : " . $ayakkabi->adi . "<br>";
echo "Fiyati : " . $ayakkabi->fiyati ." <br>";
echo "Kdv orani : " . $ayakkabi->kdvOran . "<br>";

$araba = new Urun("Ford",2052525,18);

echo "Adi : " . $araba->adi . "<br>";
echo "Fiyati : " . $araba->fiyati ." <br>";
echo "Kdv orani : " . $araba->kdvOran;


?>
</body>
</html>