<?php
try{
	$VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=nitelikliGenc;charset=UTF8", "root", "root");
}catch(PDOException $Hata){
	echo $Hata->getMessage();
	die();
}

function filtre($Deger){
	$Bir	=	trim($Deger);
	$Iki	=	strip_tags($Bir);
	$Uc		=	htmlspecialchars($Iki, ENT_QUOTES);
	$Sonuc	=	$Uc;
	return $Sonuc;
}
?>