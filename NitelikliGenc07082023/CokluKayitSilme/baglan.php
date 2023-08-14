<?php
try{
	$VeriTabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=nitelikliGenc;charset=UTF8", "root", "root");
}catch(PDOException $Hata){
	echo "Bağlantı Hatası<br />" . $Hata->getMessage();
	die();
}

function Filtrele($Deger){
	$Bir	=	trim($Deger);
	$Iki	=	strip_tags($Bir);
	$Uc		=	htmlspecialchars($Iki, ENT_QUOTES);
	$Sonuc	=	$Uc;
	return $Sonuc;
}
?>