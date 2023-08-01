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
// getAvailableDrivers() PHP yazılımı içerisinde sisteme tanımlı olan kullanılabilir PDO sürücülerin listesini verir.

//
//$degerler = PDO::getAvailableDrivers();
//
//echo  "<pre>";
//print_r($degerler);
//echo "</pre>";
//----------------------------------------------------------------

//PDO :  Kendisine verilen parametreler doğrultusunda, Mysql sunucusuna yeni bir bağlantı açmak için kullanılır.
//PDOException : Mysql sunucusuna yeni bağlantı açma işlemi sırasında bir hata ile karşılaşması durumunda bu hatayi getMessage() fonksiyonu ile ekrana yazdırır.
//getMessage(): Mysql sunucusuna yeni bir bağlantı açma islemi sırasında olası bir hata ile karşılasılması dyurumda hata açıklama değerini bularak buldupu değeri geriye döndürür.


//$veritabaniHost = "localhost";
//$veritabaniKullaniciAdi = "root";
//$veritabaniKullaniciSifresi = "root";
//$veritabaniAdi = "depo";

//İf yapısı
/**
$veritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=depo;charset=UTF8","root","root");

if($veritabaniBaglantisi){
    echo "Baglantı Kuruldu";
}else{
    echo "Baglantı Kurulamadi";
}

echo "<pre>";
print_r($veritabaniBaglantisi);
echo  "</pre>";

$veritabaniBaglantisi = null;
**/

//try yapısı

//try {
//    $veritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=depo;charset=UTF8","root","root");
//
//    echo "<pre>";
//    print_r($veritabaniBaglantisi);
//    echo  "</pre>";
//
//}catch (PDOException $exception){
//    echo  $exception->getMessage();
//}
//
//$veritabaniBaglantisi = null;
//
//
//----------------------------------------------------------------

//Birden fazla db ye bağlanma
//try{
//    $VeritabaniBaglantisiBir	=	new PDO("mysql:host=localhost;dbname=depo;charset=UTF8", "root", "root");
//    echo "1. Veritabanına Bağlantı Kuruldu<br />";
//}catch(PDOException $exception){
//    echo "1. Veritabanı Bağlantı Hatası<br />";
//    echo "1. Hata Açıklaması : " . $exception->getMessage();
//    die();
//}
//
//$VeritabaniBaglantisiBir	=	null;
//
//try{
//    $VeritabaniBaglantisiIki	=	new PDO("mysql:host=localhost;dbname=deneme2;charset=UTF8", "root", "root");
//    echo "2. Veritabanına Bağlantı Kuruldu<br />";
//}catch(PDOException $exception2){
//    echo "2. Veritabanı Bağlantı Hatası<br />";
//    echo "2. Hata Açıklaması : " . $exception2->getMessage();
//    die();
//}

//$VeritabaniBaglantisiIki	=	null;


//Veritabanı kısa bağlantı yöntemi

try{
    $veritabaniBaglantisiBir	=	new PDO("mysql:host=localhost;dbname=depo;charset=UTF8", "root", "root");
    $veritabaniBaglantisiIki	=	new PDO("mysql:host=localhost;dbname=deneme2;charset=UTF8", "root", "root");
    echo "Veritabanı Bağlatıları Kuruldu<br />";
}catch(PDOException $HataMesaji){
    echo "Veritabanı Bağlantı Hatası<br />";
    echo "Hata Açıklaması : " . $HataMesaji->getMessage();
    die();
}

$sorguBir = $veritabaniBaglantisiBir->query("Select * from kayitlar");
$sorguIki = $veritabaniBaglantisiIki->query("Select * from kisiler");

$VeritabaniBaglantisiBir	=	null;
$VeritabaniBaglantisiIki	=	null;

?>























</body>
</html>