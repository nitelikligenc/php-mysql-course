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


class Kisi{
    public $adi;
    public $soyadi;
    public function __construct($adi,$soyadi)
    {
        $this->adi = $adi;
        $this->soyadi = $soyadi;
    }

    public function kisiGetir(){
        return $this->adi ."  " . $this->soyadi;
    }

}


$kisiClass = new Kisi("RAMAZAN","AKIN");
echo $kisiClass->kisiGetir();
$kisiClass = new Kisi("Kamil ","TURAN");
echo $kisiClass->kisiGetir();
$kisiClass = new Kisi("MAHMUT","TÜFEKÇİ");
echo $kisiClass->kisiGetir();
$kisiClass = new Kisi("AYSE","KARA");
echo $kisiClass->kisiGetir();
$kisiClass = new Kisi("ECİR","HOCA");
echo $kisiClass->kisiGetir();

?>

</body>
</html>