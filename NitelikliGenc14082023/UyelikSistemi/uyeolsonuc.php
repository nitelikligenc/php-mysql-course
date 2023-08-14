<?php
require_once("baglan.php");

if(isset($_POST["kullaniciadi"])){
	$GelenKullaniciAdi		=	Filtre($_POST["kullaniciadi"]);
}else{
	$GelenKullaniciAdi		=	"";
}

if(isset($_POST["sifre"])){
	$GelenSifre				=	Filtre($_POST["sifre"]);
}else{
	$GelenSifre				=	"";
}

if(isset($_POST["adsoyad"])){
	$GelenIsimSoyisim		=	Filtre($_POST["adsoyad"]);
}else{
	$GelenIsimSoyisim		=	"";
}

if(isset($_POST["emailadresi"])){
	$GelenEmailAdresi		=	Filtre($_POST["emailadresi"]);
}else{
	$GelenEmailAdresi		=	"";
}

$KontrolSorgusu			=	$VeritabaniBaglantisi->prepare("SELECT * FROM uyeler WHERE kullaniciadi=? OR emailadresi=?");
$KontrolSorgusu->execute([$GelenKullaniciAdi, $GelenEmailAdresi]);
$KontrolSayisi			=	$KontrolSorgusu->rowCount();

if($KontrolSayisi>0){
	echo "HATA<br />";
	echo "Kullanıcı Adı veya E-Mail Adresi Başka Bir Üye Tarafından Kullanılmaktadır.<br />";
	echo "Ana Sayafaya Dönmek İçin Lütfen Buraya <a href='index.php'>Tıklayınız</a>.";
}else{
	$KayitEkle			=	$VeritabaniBaglantisi->prepare("INSERT INTO uyeler (kullaniciadi, sifre, adisoyadi, emailadresi, kayittarihi) values (?, ?, ?, ?, ?)");
	$KayitEkle->execute([$GelenKullaniciAdi, $GelenSifre, $GelenIsimSoyisim, $GelenEmailAdresi, $ZamanDamgasi]);
	$KayitKontrol		=	$KayitEkle->rowCount();
	
	if($KayitKontrol>0){
		echo "TEBRİKLER<br />";
		echo "Kullanıcı Kaydı Başarıyla Tamamlandı.<br />";
		echo "Ana Sayafaya Dönmek İçin Lütfen Buraya <a href='index.php'>Tıklayınız</a>.";
	}else{
		echo "HATA<br />";
		echo "Kullanıcı Kaydı İşlemi Sırasında Beklenmeyen Bir Hata Oluştu.<br />";
		echo "Lütfen Daha Sonra Tekrar Deneyiniz.<br />";
		echo "Ana Sayafaya Dönmek İçin Lütfen Buraya <a href='index.php'>Tıklayınız</a>.";
	}
}
?>