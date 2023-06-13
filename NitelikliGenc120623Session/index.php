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
<h1>Sessions</h1>

<?php
session_start();
// session_start(); Session oturumunu açmak veya session oturumlarını takip etmek için kullanılır.
// session_destroy() : Daha önceden oluşturulmuş session otrumlarını silmek için kullanılır.

//$_SESSION["kullaniciAdi"] = "Ramazan";
//$_SESSION["kullaniciSoyadi"] = "AKIN";
//$_SESSION["kullaniciIl"] = "Denizli";
//
//$_SESSION["urunAdi"] = "Telefon";
//$_SESSION["urunKodu"] = "#1233";
//$_SESSION["urunFiyati"] = "1,5";

//unset($_SESSION["kullaniciIl"]);

//session_destroy();
//
//echo "<pre>";
// print_r($_SESSION);
//echo "<pre>";

//echo $_SESSION["kullaniciAdi"];


//Seesion Array olarak tanımlama

$_SESSION["kullanici"] = [
    "adi" => "Ramazan",
    "soyadi" => "AKIN",
    "il" => "Denizli"
];

$_SESSION["sepet"] = [
    "urunAdi" => "Mouse",
    "urunFiyati" => "12,5",
    "urunKodu" => "#23432423"
];
//$_SESSION["kullanici"] = array("adi" => "Ramazan",
//    "soyadi" => "AKIN",
//    "il" => "Denizli"
//);


echo "<pre>";
 print_r($_SESSION);
echo "<pre>";

echo "<hr>";
print_r($_SESSION["kullanici"]) ;
print_r($_SESSION["sepet"]) ;
?>

</body>
</html>