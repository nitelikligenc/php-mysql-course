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
<h1>Min Max Sum Avg Count</h1>

<?php

/*
COUNT 	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun belirtilecek olan sütununun toplam kayıt sayısını bulmak için kullanılır.
MIN		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun belirtilecek olan sütununun en küçük kayıt değerini bulmak için kullanılır.
MAX		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun belirtilecek olan sütununun en büyük kayıt değerini bulmak için kullanılır.
SUM		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun belirtilecek olan sütununun tüm kayıt değerlerinin toplamını bulmak için kullanılır.
AVG		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun belirtilecek olan sütununun tüm kayıt değerlerinin ortalamasını bulmak için kullanılır.
*/


$VeritabaniBaglantisi = mysqli_connect("localhost", "root", "root", "Depo");

mysqli_set_charset($VeritabaniBaglantisi, "UTF8");

if (mysqli_connect_errno()) {
    echo "Bağantı Hatası<br />";
    echo "Hata Açıklaması : " . mysqli_connect_error();
    die();
}

$Sorgu = mysqli_query($VeritabaniBaglantisi, "Select COUNT(adiSoyadi) As IsimSoyisim from Kayitlar  ");
if ($Sorgu) {
    $kayitlar = mysqli_fetch_assoc($Sorgu);

    echo  "Kayit Sayisi : ".   $kayitlar["IsimSoyisim"];
} else {
    echo "Sorgu Hatası";
}

mysqli_close($VeritabaniBaglantisi);



?>

</body>
</html>