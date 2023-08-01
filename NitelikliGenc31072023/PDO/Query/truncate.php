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
TRUNCATE TABLE	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun tüm içeriklerini boşaltmak / sıfırlamak için kullanılır.
*/

try{
    $VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=depo;charset=UTF8", "root", "");
    echo "Bağlatı Kuruldu<br />";
}catch(PDOException $HataBilgisi){
    echo "Bağlantı Hatası<br />";
    echo "Hata Açıklaması : " . $HataBilgisi->grtMessage();
    die();
}

$Sorgu	=	$VeritabaniBaglantisi->query("TRUNCATE TABLE uyeler");
if($Sorgu){
    echo "Tablo İçeriği Boşaltıldı.";
}else{
    echo "Sorgu Hatası.";
}

$VeritabaniBaglantisi	=	null;

?>

</body>
</html>