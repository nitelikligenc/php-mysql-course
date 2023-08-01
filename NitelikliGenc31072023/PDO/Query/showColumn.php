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

try{
    $VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=depo;charset=UTF8", "root", "root");
    echo "Bağlantı Kuruldu.<br />";
}catch(PDOException $HataDegeri){
    echo "Bağlantı Hatası.<br />";
    echo "Hata Açıklaması : " . $HataDegeri->getMessage();
    die();
}

$SorguA		=	$VeritabaniBaglantisi->query("SHOW TABLES");
if($SorguA){
    echo "Database İçerisinde Bulunan Tüm Tablolar :<br />";
    foreach($SorguA as $Tablolar){
        echo "Tablo Adı : " . $Tablolar[0] . "<br />";

        $SorguB		=	$VeritabaniBaglantisi->query("SHOW COLUMNS FROM " . $Tablolar[0]);
        foreach($SorguB as $Sutunlar){
            echo "Sütun Adı : " . $Sutunlar[0] . "<br />";
        }
        echo "<br />";
    }
}else{
    echo "Sorgu Hatası.";
}

$VeritabaniBaglantisi	=	null;

?>
</body>




</html>