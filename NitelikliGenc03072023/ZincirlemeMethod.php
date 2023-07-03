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

//class Bicimlendir{
//
//    public $yazi;
//    public $stil;
//
//    public function metin($gelenMetin){
//        $this->yazi = $gelenMetin;
//        return $this;
//    }
//    public function renk($gelenRenk){
//         $this->stil = "color:".$gelenRenk.";";
//         return $this;
//    }
//
//    public function boyut($gelenBoyut){
//        $this->stil .= "font-size:".$gelenBoyut.";";
//        return $this;
//    }
//
//
//    public function Olustur(){
//        return "<h1 style=". $this->stil . ">". $this->yazi."</h1>";
//    }
//
//}
//
//$bicimlendir = new Bicimlendir();
//
//$bicimlendir->metin("Ramazan")->renk("red")->boyut("90px");
//
//$bicimlendir->metin("Yasemin");
//$bicimlendir->renk("green");
//$bicimlendir->boyut("100px");
//
//echo $bicimlendir->Olustur();



//100 toplama(50) sonuc 150 cıkartma(25) 125


class Hesaplama{

    private $sonuc = 0;

    public function __construct($sayiDegeri)
    {
        $this->sonuc = $sayiDegeri;
    }

    public function toplama($topSayiDegeri){
        $this->sonuc += $topSayiDegeri;
        return $this;
    }
    public function cikartma($cikSayiDegeri){
        $this->sonuc -= $cikSayiDegeri;
//        $this->sonuc = $this->sonuc - $cikSayiDegeri;
        return $this;
    }
    public function carpma($carpSayiDegeri){
        $this->sonuc *= $carpSayiDegeri;
        return $this;
    }
    public function bolme($bolSayiDegeri){
     $this->sonuc /= $bolSayiDegeri;
     return $this;
    }

    public function Göster(){
        echo "Cikan Sonuc " . $this->sonuc;
        return $this->sonuc;
    }
}


$hesap = new Hesaplama(100);

$hesap->toplama(20)->cikartma(60)->bolme(2)->carpma(10)->Göster();


?>

<!--<h1 style="font-size: 50px; color: yellow">Ramazan AKIN</h1>-->
</body>
</html>