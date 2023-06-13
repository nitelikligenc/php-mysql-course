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

<h1>Class</h1>

<?php
//
//// Class : Herhangi bir programlamada belirli bir veya daha fazla işi gerçekleştirmek üzere önceden hazırlanan nesnelere verilen isimdir.
//// new : Daha önce tanımlanmış olan herhangi bir sınıfı çağırmak için kullanılır.
//
//
////Kurallar
//
////1. Sınıf isimleri her zaman anlamlı olarak kullanılmalıdır
////2. Sınıf isimleri içerisinde alfanumerik degerler ve "_" kullanılabilir.
////3. Sınıf içerisinde mutlaka bir harf yada "_" ile başlamalıdır.
////4. Sınıf isimleri hiçbir zaman rakam ile başlayamaz.
////5. Sınıf isimleri içerisinde hicbir zaman bir boşluk bırakılamaz.
////6. Sınıf isimleri tanımlanırken PHP tarafından tanımlanan özel isimler olamaz
////7. Sınıf isimleri hiç bir zaman birden fazla kez kullanılamaz.
////8. Sınıf isimleri küçük yada büyük harflere duyarlı değildir.
////9 Sınıf kapsama / etkin alanı kurallarına tabidir.
//
//
////Yapısı
////
////class isim{
////    Kod blokları
////}
//
////class Deneme{
////
////    function adimiEkranaYaz(){
////        $isim = "Ramazan";
////        return $isim;
////    }
////
////    function soyadimiEkranaYaz(){
////        $soyadi = "AKIN";
////        return $soyadi;
////    }
////}
////$denemeClass = new Deneme();
////$ad = $denemeClass->adimiEkranaYaz();
////$soyad = $denemeClass->soyadimiEkranaYaz();
////
////echo  "Adınız: " . $ad . "     Soyadınız:  " . $soyad;
//
//
//class Kullanici
//{
//    public $ad = "Ramazan";
//    const SOYAD = "AKIN";
//
//    public function bilgileriGetir()
//    {
//        $meslek = "Bilgisayar Müh.";
//        $okul = "SDÜ";
//        $il = "DENİZLİ";
//        $tel = "5416244286";
//
//        $metin = "Okul : " . $okul . "Bölüm  :" . $meslek . "Il  : " . $il . "Tel : " . $tel;
//        return $metin;
//
//    }
//}
//
//$yeniKisi = new Kullanici();
//
//echo "public ad     " . $yeniKisi->ad;
//echo "<br>";
//echo "const     " . $yeniKisi::SOYAD;
//echo "<br>";
//echo "Fonksiyon bilgileri   " . $yeniKisi->bilgileriGetir();
//
//
//?>


<?php

// var : Herhangi bir sınıf içerisinde standart değişkeni tanımlamak için kullanılır.
//
//class Kullanici{
//    var  $isim = "Ramazan";
//}
//$kul = new Kullanici();
//echo "İsim  :" . $kul->isim;



//construct

//class Kullanici{
//
//    //Constructor Yapıcı methoddur,Belirtilecek olan sınıfa yapıcı method tanımlamanızı sağlar
//    //Deconstructor Yıkıcı methoddur. Belirtilecek olan sınıfa yıkıcı method tanımlar.
//    public function __construct()
//    {
//        echo "Yapıcı Method çalıştı.". " <br/>";
//    }
//
//    public function isimYaz(){
//        echo "İsim yaz fonksiyonu çalıştı.". " <br/>";
//    }
//
//    public function __destruct()
//    {
//        echo "Tüm methodlar çalıştı en sonunda da destruct çalıştı". " <br/>";
//    }
//
//}
//$kull = new Kullanici();

//$kull->isimYaz();

//
//class veritabani{
//
//    public function __construct($hostBilgisi,$veritabaniAdi,$sifresi)
//    {
//        $metin = "Veritabani  : " . $veritabaniAdi . "Host Bilgisi  :" .$hostBilgisi . "Sifresi   : "  .$sifresi;
//
//        echo $metin;
//    }
//}
//
//
//$bilgiler = new veritabani("www.google.com","BilgiSitemi","12312");
//
//
//class Ad{
//    public  $isim = "Yasemin";
//    public  $soyisim = "Deneme";
//}
//
//$adClass = new Ad();
//
//$adClass->isim = "Ramazan";
//$adClass->soyisim = "AKIN";

//
//
//class kullanici{
//
//    const ISIM = "Ramazan";
//    const SOYISIM = "Ramazan";
//
//}
//
//$kulllanici = new kullanici();


//class Sepet{
//
//
//    function sepetBilgileriniGetir($urunAdi,$urunKodu,$fiyati = "0"){
//        $metin = "Urun Adi :  " .$urunAdi . "  Urun Kodu  :  " . $urunKodu . "   Fiyatı :  " . $fiyati;
//
//        return $metin;
//    }
//}
//
//$sepet = new Sepet();
//
//$sepetFonk = $sepet->sepetBilgileriniGetir("Ayakkabi","#25548596","123,55");
//
//$sepetFonk2 = $sepet->sepetBilgileriniGetir("Çanta","#89897");
//
//
//echo  $sepetFonk;
//echo "<br>";
//echo  $sepetFonk2;


//
//class Sepet {
//    protected function urunYaz(){
//        echo "Private yazıdırılamaz.";
//    }
//}
//
//$sepet = new Sepet();


// public: Genel her yerden erişilir.
// private: Sadece bulunduğu classdan erişim sağlar
// protected : Sınıf içerisinden ve türetilen sınıflardan kullanmın erişimi sağlar.

// static: Sabit demektir.Sınıf içerisindeki herhangi bir özellik veya metoda sınıf çağırılmasından erişilebilir.  Sepet::fonksiyonAdi
// $this : Bu sınıfta şeklinde sınıfı işaretlemek  için kullanılır.
// self:  Kendi sınıfımda şeklinde sınıfı işaretlemek için kullanılır.
// parent: Ebeveny sınıfımda şeklinde sınıf işaret etmek için kullanılır.


class Bir{
    public $sayininAdi = "Bir";
    protected $sayininDurumu = "Aktif";
    public function sayiGetir(){
        echo "Sayi getirildi." . $this->sayininAdi . $this->sayininDurumu;
    }
}

class Iki extends Bir {

}

$iki = new Iki();
echo $iki->sayiGetir();



?>
</body>
</html>