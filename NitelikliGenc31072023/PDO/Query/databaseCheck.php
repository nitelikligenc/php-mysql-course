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
CHECK 		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun kontrol edilmesi için kullanılır.
ANALYZE		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun çözümlenmesi / analiz edilmesi için kullanılır.
REPAIR 		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun onarılması edilmesi için kullanılır.
OPTIMIZE	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun optimize edilmesi için kullanılır.
*/

try{
    $VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=depo;charset=UTF8", "root", "root");
    echo "Bağlantı Kuruldu.<br />";
}catch(PDOException $HataBilgisi){
    echo "Bağlantı Hatası.<br />";
    echo "Hata Açıklaması : " . $HataBilgisi->getMessage();
    die();
}

$SorguA		=	$VeritabaniBaglantisi->query("CHECK TABLE uyeler");
$SorguB		=	$VeritabaniBaglantisi->query("ANALYZE TABLE uyeler");
$SorguC		=	$VeritabaniBaglantisi->query("REPAIR TABLE uyeler");
$SorguD		=	$VeritabaniBaglantisi->query("OPTIMIZE TABLE uyeler");

if(($SorguA == true) and ($SorguB == true) and ($SorguC == true) and ($SorguD == true)){
    echo "Tablo Bakımı Yapıldı.";
}else{
    echo "Sorgu Hatası.";
}

$VeritabaniBaglantisi	=	null;
?>
</body>



</html>