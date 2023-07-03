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

class  islemler
{

    public $isimSoyisim;
    public $aylikGelir;
    public $aylikGider;

    public function setIsimSoyisim($adSoyad)
    {
        return $this->isimSoyisim = $adSoyad;

    }

    public function setAylikGelir($gelir)
    {
        return $this->aylikGelir = $gelir;
    }

    public function setAylikGider($gider)
    {
        return $this->aylikGider = $gider;
    }

    public function gelirGiderHesabla()
    {
        $netKazanci = $this->aylikGelir - $this->aylikGider;
        return $netKazanci;
    }

    public function onIkiAylikGelirHesapla()
    {
        $yillikNetGelir = ($this->aylikGelir - $this->aylikGider) * 12;
        return $yillikNetGelir;
    }

}

class  DahiliPersonel extends islemler
{
}

class  HariciPersonel extends islemler
{
}

$dahili = new DahiliPersonel();
$dahili->setAylikGelir(10000);
$dahili->setAylikGider(9000);
$dahili->setIsimSoyisim("Ramazan AKIN");
echo "Aylik net kazanci: " . $dahili->gelirGiderHesabla() . "<br/>";
echo "12 Aylik net kazanci: " . $dahili->onIkiAylikGelirHesapla();

echo"<br/>";
$harici = new HariciPersonel();
$harici->setIsimSoyisim("Yasemin Balkan");
$harici->setAylikGelir(5000);
$harici->setAylikGider(1000);
echo "Aylik net kazanci: " . $harici->gelirGiderHesabla() . "<br/>";
echo "12 Aylik net kazanci: " . $harici->onIkiAylikGelirHesapla();

?>

</body>
</html>