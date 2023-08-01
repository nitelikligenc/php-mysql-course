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
<body>
<?php
/*
CREATE DATABASE		:	MySQL sunucusuna yeni bir database ekleme / oluşturma için kullanılır.
CREATE TABLE		:	MySQL sunucusundaki database içerisine yeni bir tablo ekleme / oluşturma için kullanılır. Ayrıca istenirse herhangi bir tablo içeriklerini başka bir tabloya kopyalamak için de kullanılabilir.
*/

try{
    $VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;charset=UTF8", "root", "root");
    echo "Veritabanı Bağlantısı Kuruldu<br />";
}catch(PDOException $HataMesaji){
    echo "Vetitabanı Bağlantı Hatası<br />";
    echo "Hata Açıklaması : " . $HataMesaji->getMessage();
    die();
}

$Sorgu	=	$VeritabaniBaglantisi->query("CREATE DATABASE deneme33");
// $Sorgu	=	$VeritabaniBaglantisi->query("CREATE DATABASE test CHARACTER SET utf8 COLLATE utf8_general_ci");
if($Sorgu){
    echo "Database Oluşturuldu.";
}else{
    echo "Sorgu Hatası";
}

$VeritabaniBaglantisi	=	null;

?>
</body>

</body>
</html>