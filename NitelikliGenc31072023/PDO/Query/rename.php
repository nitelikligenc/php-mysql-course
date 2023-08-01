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
RENAME 		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun adını değiştirmek / güncellemek için kullanılır. Ayrıca istenirse herhangi bir tabloyu içerisinden bulunduğu database'den başka bir database'e taşımak içinde kullanılır.
*/

try{
    $VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=depo;charset=UTF8", "root", "root");
    echo "Veritabanı Bağlantısı Kuruldu<br />";
}catch(PDOException $HataDegeri){
    echo "Bağlantı Hatası<br />";
    echo "Hata Açıklaması : " . $HataDegeri->getMessage();
    die();
}

$Sorgu		=	$VeritabaniBaglantisi->query("RENAME TABLE kayitlar2 TO kayitlar");
if($Sorgu){
    echo "Tablo Adı Değiştirildi.";
}else{
    echo "Sorgu Hatası.";
}

$VeritabaniBaglantisi	=	null;

?>
</body>


</html>