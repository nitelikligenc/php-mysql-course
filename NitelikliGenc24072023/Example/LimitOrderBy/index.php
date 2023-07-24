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


<h1> Genel Örnekler</h1>

<?php

//Limit : Sql sunucusundaki database içerisinde bulunan herhangi bir tablonun işlem esnasında tüm verilerini işlemek sadece belirtilen adet veya aralıklar için kullanılır.
//Order by : Sunucudaki database içerisinde bulunuan herhangi bir tablonun verilerine işlem esnasında hangi sıra dahilinde erişmek istenildiğini belitmek için kullanılır.


$VeritabaniBaglantisi = mysqli_connect("localhost", "root", "root", "Depo");

mysqli_set_charset($VeritabaniBaglantisi, "UTF8");

if (mysqli_connect_errno()) {
    echo "Bağantı Hatası<br />";
    echo "Hata Açıklaması : " . mysqli_connect_error();
    die();
}

$Sorgu = mysqli_query($VeritabaniBaglantisi, "Select * from Kayitlar LIMIT 5 ");
if ($Sorgu) {
    while ($Kayitlar = mysqli_fetch_assoc($Sorgu)) {
        echo "ID Değeri : " . $Kayitlar["id"] . "<br />";
        echo "adiSoyadi : " . $Kayitlar["adiSoyadi"] . "<br />";
        echo "yas : " . $Kayitlar["yas"] . "<br />";
        echo "sehir : " . $Kayitlar["sehir"] . "<br />";
        echo "siteyeGirisSayisi : " . $Kayitlar["siteyeGirisSayisi"] . "<br />";
        echo "siparisSayisi : " . $Kayitlar["siparisSayisi"] . "<br />";
        echo "siparisToplamTutar : " . $Kayitlar["siparisToplamTutar"] . "<br />";
        echo "<hr>";
    }
} else {
    echo "Sorgu Hatası";
}

mysqli_close($VeritabaniBaglantisi);


?>


</body>
</html>