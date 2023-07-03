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

class Uye
{
    public $uyeAdi;
    public $uyeSoyadi;


    public function __construct($adi, $soyadi)
    {
        $this->uyeAdi = $adi;
        $this->uyeSoyadi = $soyadi;
    }

    public function setAdi($adi)
    {
        $this->uyeAdi = $adi;
    }

    public function setSoyadi($soyadi)
    {
        $this->uyeSoyadi = $soyadi;
    }

    public function adiSoyadiGetir(){

        return $this->uyeAdi . " " . $this->uyeSoyadi;
    }

}

$yeniUye = new Uye("Ramazan","AKIN");

$yeniUye->setAdi("Kamil");
$yeniUye->setSoyadi("DURAN");

echo  $yeniUye->adiSoyadiGetir();


?>
</body>
</html>