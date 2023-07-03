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
<h1>Traitler</h1>


<?php

// trait : Sınıflar için özellik ve method kullanımı kolaylaştırmak için kullanılır.
// use :  Daha önceden tanımlanmış olan herhangi bir özellik veya metod grubunu ilgili sınıfa tanımlamak ve dahil etmek için kullanılır.
// insteadof : Sınıf için tanımlanmış olan özellik ve metod gruplarında tercih ve seçim işlemleri için kullanılır.
// as : Sınıf içinde tanımlanmış olan özellik ve method gruplarından methoda takma isim belirleme ve görünürlük ayarlarını yapmak için kullanılır.

//Traitlerde const ifadesi kullanılmaz.!
//trait Kisi
//{
//    public $ad;
//    public $soyad;
//    public function tanim()
//    {
//        return $this->ad . " " . $this->soyad;
//    }
//}
//
//class deneme {
//    use Kisi;
//
//}
//$deneme = new deneme();

//----------------------------------------------------------------
//trait AdSoyad{
//    public $isim;
//    public $soyisim;
//
//}
//
//trait Bilgi{
//    public function tanimlar(){
//        return "Burada tanım yapılmaktadır.";
//    }
//}
//
//class Kisi{
//    use AdSoyad,Bilgi;
//
//}
//
//$kisi = new Kisi();

//---------------------------------------------------------

trait AdSoyad{
    public $isim;
    public $soyisim;
    public function getAdSoyad(){
        return $this;
    }
}

trait Bilgi{
    use AdSoyad;
}

class Kisi{
    use Bilgi;
}

$kisi = new Kisi();

?>
</body>
</html>