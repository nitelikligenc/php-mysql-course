<?php
require_once("baglan.php");

$GelenID		=	Filtrele($_GET["id"]);

function Filtrele($Deger){
	$Bir	=	trim($Deger);
	$Iki	=	strip_tags($Bir);
	$Uc		=	htmlspecialchars($Iki, ENT_QUOTES);
	$Sonuc	=	$Uc;
	return $Sonuc;
}

$MenuHiyerarsiniBulDizisi	=	array($GelenID);

function MenuHiyerarsiniBul($MenuIdDegeri){
	global $VeritabaniBaglantisi;
	global $MenuHiyerarsiniBulDizisi;

	$MenuSorgusu			=	$VeritabaniBaglantisi->prepare("SELECT * FROM menuler WHERE ustid = ?");
	$MenuSorgusu->execute([$MenuIdDegeri]);
	$MenuSorugusuSayi		=	$MenuSorgusu->rowCount();
	$MenuSorugusuKayitlari	=	$MenuSorgusu->fetchAll(PDO::FETCH_ASSOC);

	if($MenuSorugusuSayi>0){
		foreach($MenuSorugusuKayitlari as $Kayitlar){
			$MenuId			=	 $Kayitlar["id"];
//			$MenuUstId		=	 $Kayitlar["ustid"];
//			$MenuMenuAdi	=	 $Kayitlar["menuadi"];
			$MenuHiyerarsiniBulDizisi[]	=	$MenuId;
			MenuHiyerarsiniBul($MenuId);
		}
	}
//    echo "<pre>";
//    print_r($MenuHiyerarsiniBulDizisi);
//    echo "</pre>";
//    die();
	return $MenuHiyerarsiniBulDizisi;
}

if($GelenID != ""){
	$SilinecekMenuler	=	MenuHiyerarsiniBul($GelenID);
	
	foreach($SilinecekMenuler as $SilinecekID){
		$Sil				=	$VeritabaniBaglantisi->prepare("DELETE FROM menuler WHERE id = ? LIMIT 1");
		$Sil->execute([$SilinecekID]);
		$SilKontrolSayisi	=	$Sil->rowCount();
			if($SilKontrolSayisi<1){
				echo "HATA<br />";
				echo "İşlem Sırasında Beklenmeyen Bir Sorun Oluştu. Daha Sonra Tekrar Deneyiniz.<br />";
				echo "Ana Sayfaya Geri Dönmek İçin Lütfen Buraya <a href='index.php'>Tıklayınız</a>.";
			}
	}
	
	header("Location:index.php");
	exit();
}else{
	echo "HATA<br />";
	echo "Ana Sayfaya Geri Dönmek İçin Lütfen Buraya <a href='index.php'>Tıklayınız</a>.";
}

$VeritabaniBaglantisi	=	null;
?>