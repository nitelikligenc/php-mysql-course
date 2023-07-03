<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>03072023 Ders</title>
</head>
<body>

<h1>Class Ornekleri</h1>
<?php

//interface insan
//{
//    const KALP = true;
//
//    public function adSoyad();
//
//    function yas();
//
//}
//
//
//class ogrenci implements insan
//{
//
//    public function adSoyad()
//    {
//        // TODO: Implement adSoyad() method.
//    }
//
//    function yas()
//    {
//        // TODO: Implement yas() method.
//    }
//}

//----------------------------------------------------------------
//interface Insan{
//    public function adSoyad();
//    public function tcGetir();
//}
//
//interface Ogrenci extends insan{
//    public function ogrenciNoGetir();
//}
//
//abstract class UniversiteOgrencisi implements Ogrenci{
//
//    //UniversiteOgrencisine ait olan tüm methodları ve fonksiyonları yazabilirsiniz.
//
//}
//class BilgisayarMuhOgrencisi extends  UniversiteOgrencisi {
//
//    public function adSoyad()
//    {
//        // TODO: Implement adSoyad() method.
//    }
//
//    public function tcGetir()
//    {
//        // TODO: Implement tcGetir() method.
//    }
//
//    public function ogrenciNoGetir()
//    {
//        // TODO: Implement ogrenciNoGetir() method.
//    }
//}
//

//----------------------------------------------------------------
//
//interface Insan
//{
//    public function adSoyad();
//}
//
//interface Ogrenci
//{
//    public function ogrenciNumarasi();
//}
//
//class UniversiteOgrencisi implements Insan, Ogrenci
//{
//
//    public function adSoyad()
//    {
//        // TODO: Implement adSoyad() method.
//    }
//
//    public function ogrenciNumarasi()
//    {
//        // TODO: Implement ogrenciNumarasi() method.
//    }
//}



//----------------------------------------------------------------

abstract class Araba{
    private $agirlik;
    private $model;
    private $marka;
    private $yil;

    public abstract function  tekerlekDevirSayisi();
}

class Ford extends Araba{
    public function tekerlekDevirSayisi()
    {
        return 5;
        // TODO: Implement tekerlekDevirSayisi() method.
    }
}
class Mercedes extends Araba{
    public function tekerlekDevirSayisi()
    {
        return 2;
        // TODO: Implement tekerlekDevirSayisi() method.
    }
}

$mercedes = new Mercedes();
$ford = new Ford();

?>
</body>
</html>