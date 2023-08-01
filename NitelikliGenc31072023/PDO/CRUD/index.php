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
    echo "Bağlantı Hatası";
    echo "Hata Açıklaması : " . $Hata->getMessage();
    die();
}

?>
<form action="sonuc.php" method="post">
    İsim : <input type="text" name="adiSoyadi"><br />
    Yaş : <input type="number" name="yas"><br />
    Sehir : <input type="tex" name="sehir"><br />
    Siteye Giriş Sayısı : <input type="tex" name="siteyeGirisSayisi"><br />
    Sipariş Sayısı : <input type="tex" name="siparisSayisi"><br />
    Sipariş Toplam Tutar : <input type="tex" name="siparisToplamTutar"><br />
    <input type="submit" value="Kaydet">
</form>
<br /><br />

<?php
$Sorgu		=	$VeritabaniBaglantisi->query("SELECT * FROM kayitlar", PDO::FETCH_ASSOC);
if($Sorgu){
    $KayitSayisi	=	$Sorgu->rowCount();
    if($KayitSayisi>0){
        foreach($Sorgu as $Satirlar){
            echo $Satirlar["id"] . " | " . $Satirlar["adiSoyadi"] . " | " . $Satirlar["yas"] . " | " . $Satirlar["sehir"] . " | " . $Satirlar["siteyeGirisSayisi"]  . " | " . $Satirlar["siparisSayisi"] . " | " . $Satirlar["siparisToplamTutar"] .
                 " <a href='sil.php?silinecekID=" . $Satirlar["id"] ."'>SİL</a>"."<br />";
        }
    }else{
        echo "Kayıt Yok";
    }
}else{
    echo "Sorgu Hatası";
}

$VeritabaniBaglantisi	=	null;

?>
</body>

</html>