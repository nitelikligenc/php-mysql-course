<?php
try{
	$VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=nitelikliGenc;charset=UTF8", "root", "root");
}catch(PDOException $Hata){
	echo "Bağlantı Hatası<br />" . $Hata->getMessage();
	die();
}
?>