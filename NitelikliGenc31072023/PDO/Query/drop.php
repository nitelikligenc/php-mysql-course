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
DROP DATABASE	:	MySQL sunucusu içerisinde bulunan herhangi bir database'i silmek için kullanılır.
DROP TABLE		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloyu silmek için kullanılır.
*/

//try{
//    $VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;charset=UTF8", "root", "root");
//    echo "Veritabanı Bağlantısı Kuruldu<br />";
//}catch(PDOException $HataDegeri){
//    echo "Bağlantı Hatası<br />";
//    echo "Hata Açıklaması : " . $HataDegeri->getMessage();
//    die();
//}
//
//$Sorgu		=	$VeritabaniBaglantisi->query("DROP DATABASE depo");
//if($Sorgu){
//    echo "Database Silindi.";
//}else{
//    echo "Sorgu Hatası";
//}
//
//$VeritabaniBaglantisi	=	null;



/*
DROP DATABASE	:	MySQL sunucusu içerisinde bulunan herhangi bir database'i silmek için kullanılır.
DROP TABLE		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloyu silmek için kullanılır.
*/

try{
    $VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=deneme;charset=UTF8", "root", "");
    echo "Veritabanı Bağlantısı Kuruldu<br />";
}catch(PDOException $HataDegeri){
    echo "Bağlantı Hatası<br />";
    echo "Hata Açıklaması : " . $HataDegeri->getMessage();
    die();
}

$Sorgu		=	$VeritabaniBaglantisi->query("DROP TABLE ornek");
if($Sorgu){
    echo "Tablo Silindi.";
}else{
    echo "Sorgu Hatası";
}

$VeritabaniBaglantisi	=	null;

?>
</body>

</html>