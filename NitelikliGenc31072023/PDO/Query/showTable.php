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
SHOW TABLES		:	MySQL sunucusundaki database içerisinde bulunan tüm tabloların listesini bulmak için kullanılır.
SHOW COLUMNS	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun tüm sütunlarının listesini bulmak için kullanılır.
*/

try{
    $VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=depo;charset=UTF8", "root", "root");
    echo "Bağlantı Kuruldu.<br />";
}catch(PDOException $HataDegeri){
    echo "Bağlantı Hatası.<br />";
    echo "Hata Açıklaması : " . $HataDegeri->getMessage();
    die();
}

$Sorgu		=	$VeritabaniBaglantisi->query("SHOW TABLES");
if($Sorgu){
    foreach($Sorgu as $Tablolar){
        echo "<pre>";
        print_r($Tablolar);
        echo "</pre>";
    }
}else{
    echo "Sorgu Hatası.";
}

$VeritabaniBaglantisi	=	null;

?>
</body>

</html>