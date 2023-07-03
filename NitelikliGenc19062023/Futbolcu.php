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
<h1>Class Oluşturma</h1>
<?php

class Oyuncu{

    public $adi;
    public $soyadi;
    public $golSayisi;
    public $assistSayisi;

    public function golSayisiFunc(){
         return $this->golSayisi++;

    }

    public function assistSayisiFunc(){
        return $this->assistSayisi++;
    }

}

$oyuncu = new Oyuncu();

$oyuncu->adi = "Ramazan";
$oyuncu->soyadi = "AKIN";
$oyuncu->golSayisi = 12;
$oyuncu->assistSayisi = 43;

echo $oyuncu->golSayisiFunc();
echo $oyuncu->assistSayisiFunc();








?>

</body>
</html>