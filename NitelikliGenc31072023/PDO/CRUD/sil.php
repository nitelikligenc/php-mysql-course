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
}catch(PDOException $Hata){
    echo "Bağlantı Hatası<br />";
    echo "Hata Açıklaması : " . $Hata->getMessage();
    die();
}

$GelenID	=	$_GET["silinecekID"];

$Sil	=	$VeritabaniBaglantisi->query("DELETE FROM kayitlar WHERE id=" . $GelenID);
if($Sil){
    header("Location:index.php");
    exit();
}else{
    echo "Sorgu Hatası";
}

$VeritabaniBaglantisi	=	null;

?>
</body>



</html>