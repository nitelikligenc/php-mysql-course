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
<h1>Merhbala</h1>

<?php

// setcookie() Belirtilecek olan değerler doğrultusunda cookie(çerez) oluşturmak ve silmek için gereken fonksiyondur.
// içerisinde 3 parametre alır
// 1- Parametre Key, 2- Parametre Value 3- Parametre Çerez yaşam süresi

//
//setcookie("kullaniciAdi","Ramazan");
//setcookie("kullaniciSoyAdi","Akin");
//setcookie("egitimAdi","Genç Denizli");
//setcookie("kullaniciAdi","Hasan");
//
//echo "<pre>";
//print_r($_COOKIE); // $_COOKIE tüm sistemdeki cookieleri getirir.
//echo "</pre>";
//
//
//echo $_COOKIE["kullaniciAdi"];
//echo "<br>";
//echo $_COOKIE["kullaniciSoyAdi"];
//echo "<br>";
//echo $_COOKIE["egitimAdi"];
//echo "<br>";


//$time = time() * 60 * 60;
//setcookie("kullaniciAdi1","Ramazan",$time);
//echo "<pre>";
//print_r($_COOKIE); // $_COOKIE tüm sistemdeki cookieleri getirir.
//echo "</pre>";
//setcookie("kullaniciAdi","Ramazan"); // Set edilen Cookie yi siler
//echo $_COOKIE["kullaniciAdi"];
//echo "<br>";

//setcookie("kullaniciAdi1" ,"", 0)

setcookie("adi","Ramazan");
setcookie("soyadi","AKIN");
setcookie("tel","5416244286");

setcookie("urunAdi","Ayakkabi");
setcookie("fiyati","300");
setcookie("urunKodu","12122");

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";



setcookie("kullanici[adi]","Ramazan");
setcookie("kullanici[soyadi]","AKIN");
setcookie("kullanici[tel]","5416244286");

setcookie("sepet[urunKod]","51545");
setcookie("sepet[urunAdi]","Bilgisayar");
setcookie("sepet[urunFiyati]","541");


echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

?>
</body>
</html>