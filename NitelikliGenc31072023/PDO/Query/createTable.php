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
//
//try{
//    $VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=depo;charset=UTF8", "root", "root");
//    echo "Veritabanı Bağlantısı Kuruldu<br />";
//}catch(PDOException $HataMesaji){
//    echo "Vetitabanı Bağlantı Hatası<br />";
//    echo "Hata Açıklaması : " . $HataMesaji->getMessage();
//    die();
//}
//
////Create Table tabloAdi()
//
//$Sorgu	=	$VeritabaniBaglantisi->query("CREATE TABLE ornek (
//		id int(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
//		adi varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
//		soyadi varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
//		emailadresi varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL UNIQUE KEY,
//		durumu tinyint(1) UNSIGNED NOT NULL,
//		kayittarihi timestamp NOT NULL DEFAULT current_timestamp,
//		yoneticiaciklamasi text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
//	)
//	ENGINE=InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci");
//if($Sorgu){
//    echo "Tablo Oluşturuldu.";
//}else{
//    echo "Sorgu Hatası";
//}
//
//$VeritabaniBaglantisi	=	null;



try{
    $VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=depo;charset=UTF8", "root", "root");
    echo "Veritabanı Bağlantısı Kuruldu<br />";
}catch(PDOException $HataMesaji){
    echo "Vetitabanı Bağlantı Hatası<br />";
    echo "Hata Açıklaması : " . $HataMesaji->getMessage();
    die();
}

$Sorgu	=	$VeritabaniBaglantisi->query("CREATE TABLE ornekyedek LIKE ornek");
if($Sorgu){
    echo "Tablo Oluşturuldu.";
}else{
    echo "Sorgu Hatası";
}

$VeritabaniBaglantisi	=	null;



?>
</body>

</html>