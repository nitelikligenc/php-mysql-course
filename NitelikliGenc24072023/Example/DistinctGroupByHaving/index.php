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
/*
DISTINCT		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun verilerini okuma işlemi sırasında belirtilecek olan sütuna / sütunlara ait tekrar eden verilerin sadece ilkini işleme dahil ederek diğerlerinin işlem dışında bırakılmasını sağlamak için kullanılır.
GROUP BY		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun verilerini okuma işlemi sırasında belirtilecek olan sütuna / sütunlara ait tekrar eden verilerin gruplandırılmasını sağlamak için kullanılır.
HAVING			:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun verilerini okuma işlemi sırasında belirtilecek olan sütuna / sütunlara ait tekrar eden verilerin GROUP BY ifadesi ile gruplandırılması sırasında koşul / koşullar tanımlamak / belirtmek için kullanılır.
*/

//Disticnt
//$VeritabaniBaglantisi = mysqli_connect("localhost", "root", "root", "Depo");
//
//mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
//
//if (mysqli_connect_errno()) {
//    echo "Bağantı Hatası<br />";
//    echo "Hata Açıklaması : " . mysqli_connect_error();
//    die();
//}
//
//$Sorgu = mysqli_query($VeritabaniBaglantisi, "Select DISTINCT sehir from Kayitlar  ");
//if ($Sorgu) {
//    while ($Kayitlar = mysqli_fetch_assoc($Sorgu)) {
//        echo "Sehir : " . $Kayitlar["sehir"] . "<br />";
////        echo "adiSoyadi : " . $Kayitlar["adiSoyadi"] . "<br />";
////        echo "yas : " . $Kayitlar["yas"] . "<br />";
////        echo "sehir : " . $Kayitlar["sehir"] . "<br />";
////        echo "siteyeGirisSayisi : " . $Kayitlar["siteyeGirisSayisi"] . "<br />";
////        echo "siparisSayisi : " . $Kayitlar["siparisSayisi"] . "<br />";
////        echo "siparisToplamTutar : " . $Kayitlar["siparisToplamTutar"] . "<br />";
//        echo "<hr>";
//    }
//} else {
//    echo "Sorgu Hatası";
//}
//
//mysqli_close($VeritabaniBaglantisi);



///Group By

$VeritabaniBaglantisi = mysqli_connect("localhost", "root", "root", "Depo");

mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
//
//if (mysqli_connect_errno()) {
//    echo "Bağantı Hatası<br />";
//    echo "Hata Açıklaması : " . mysqli_connect_error();
//    die();
//}

$Sorgu = mysqli_query($VeritabaniBaglantisi, "Select sehir from Kayitlar GROUP BY sehir HAVING siparisSayisi > 30");
if ($Sorgu) {

    var_dump($Sorgu);
    exit();
    while ($Kayitlar = mysqli_fetch_assoc($Sorgu)) {
        echo "sehir : " . $Kayitlar["sehir"] . "<br />";
        echo "siparisSayisi : " . $Kayitlar["siparisSayisi"] . "<br />";
//        echo "Sehir : " . $Kayitlar["sehir"] . "<br />";
//        echo "adiSoyadi : " . $Kayitlar["adiSoyadi"] . "<br />";
//        echo "yas : " . $Kayitlar["yas"] . "<br />";
//        echo "sehir : " . $Kayitlar["sehir"] . "<br />";
//        echo "siteyeGirisSayisi : " . $Kayitlar["siteyeGirisSayisi"] . "<br />";
//        echo "siparisSayisi : " . $Kayitlar["siparisSayisi"] . "<br />";
//        echo "siparisToplamTutar : " . $Kayitlar["siparisToplamTutar"] . "<br />";
        echo "<hr>";
    }
} else {
    echo "Sorgu Hatası";
}

mysqli_close($VeritabaniBaglantisi);

?>

</body>
</html>