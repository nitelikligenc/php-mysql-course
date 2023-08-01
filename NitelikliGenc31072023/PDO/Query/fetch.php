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

//FETH_BOTH
//try{
//    $VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=depo;charset=UTF8", "root", "root");
//}catch(PDOException $HataDegeri){
//    echo "Bağlantı Hatası.<br />";
//    echo "Hata Açıklaması : " . $HataDegeri->getMessage();
//    die();
//}
//
//$Sorgu		=	$VeritabaniBaglantisi->query("SELECT * FROM kayitlar", PDO::FETCH_BOTH);
//if($Sorgu){
//    foreach($Sorgu as $Satirlar){
//        echo "ID : " . $Satirlar["id"] . "<br />";
//        echo "İSİM : " . $Satirlar["adiSoyadi"] . "<br />";
//        echo "YAŞ : " . $Satirlar["yas"] . "<br />";
//        echo "Şehir : " . $Satirlar["sehir"] . "<br />";
//        echo "Siteye Giriş Sayisi : " . $Satirlar["siteyeGirisSayisi"] . "<br /><br />";
//        echo "Sipariş Sayisi : " . $Satirlar["siparisSayisi"] . "<br /><br />";
//        echo "Sipariş Toplam Tutar : " . $Satirlar["siparisToplamTutar"] . "<br /><br />";
//    }
//}else{
//    echo "Sorgu Hatası";
//}
//
//$VeritabaniBaglantisi	=	null;


//FETCH_BOTH DİZİ Kullanımı
//try{
//    $VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=depo;charset=UTF8", "root", "root");
//}catch(PDOException $HataDegeri){
//    echo "Bağlantı Hatası.<br />";
//    echo "Hata Açıklaması : " . $HataDegeri->getMessage();
//    die();
//}
//
//$Sorgu		=	$VeritabaniBaglantisi->query("SELECT * FROM kayitlar", PDO::FETCH_BOTH);
//if($Sorgu){
//    foreach($Sorgu as $Satirlar){
//        echo "ID : " . $Satirlar[0] . "<br />";
//        echo "İSİM : " . $Satirlar[1] . "<br />";
//        echo "YAŞ : " . $Satirlar[2] . "<br />";
//        echo "Sehir : " . $Satirlar[3] . "<br />";
//        echo "Siteye Gİriş Sayısı  : " . $Satirlar[4] . "<br /><br />";
//        echo "Siteye Toplam Tutar  : " . $Satirlar[5] . "<br /><br />";
//    }
//}else{
//    echo "Sorgu Hatası";
//}
//
//$VeritabaniBaglantisi	=	null;



//Fetch_Assoc
//

//try{
//    $VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=depo;charset=UTF8", "root", "root");
//}catch(PDOException $HataDegeri){
//    echo "Bağlantı Hatası.<br />";
//    echo "Hata Açıklaması : " . $HataDegeri->getMessage();
//    die();
//}
//
//$Sorgu		=	$VeritabaniBaglantisi->query("SELECT * FROM kayitlar", PDO::FETCH_ASSOC);
//if($Sorgu){
//    foreach($Sorgu as $Satirlar){
//        echo "ID : " . $Satirlar["id"] . "<br />";
//        echo "İSİM : " . $Satirlar["adiSoyadi"] . "<br />";
//        echo "YAŞ : " . $Satirlar["yas"] . "<br />";
//        echo "Şehir : " . $Satirlar["sehir"] . "<br />";
//        echo "Siteye Giriş Sayisi : " . $Satirlar["siteyeGirisSayisi"] . "<br /><br />";
//        echo "Sipariş Sayisi : " . $Satirlar["siparisSayisi"] . "<br /><br />";
//        echo "Sipariş Toplam Tutar : " . $Satirlar["siparisToplamTutar"] . "<br /><br />";
//    }
//}else{
//    echo "Sorgu Hatası";
//}
//
//$VeritabaniBaglantisi	=	null;


//Fecth_obj

try{
    $VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=depo;charset=UTF8", "root", "root");
}catch(PDOException $HataDegeri){
    echo "Bağlantı Hatası.<br />";
    echo "Hata Açıklaması : " . $HataDegeri->getMessage();
    die();
}

$Sorgu		=	$VeritabaniBaglantisi->query("SELECT * FROM kayitlar", PDO::FETCH_OBJ);
if($Sorgu){
    foreach($Sorgu as $Satirlar){
        echo "ID : " . $Satirlar->id . "<br />";
        echo "İSİM : " . $Satirlar->adiSoyadi . "<br />";
        echo "YAŞ : " . $Satirlar->yas . "<br />";
        echo "Sehir : " .$Satirlar->sehir . "<br />";
        echo "sipariş sayisi : " . $Satirlar->siparisSayisi . "<br /><br />";
        echo "sipariş sayisi : " . $Satirlar->siparisToplamTutar . "<br /><br />";
    }
}else{
    echo "Sorgu Hatası";
}

$VeritabaniBaglantisi	=	null;


?>
</body>

</html>