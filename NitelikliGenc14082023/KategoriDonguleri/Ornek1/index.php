<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Nitelikli Genç</title>
</head>

<body>
	<?php
	try{
		$VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=nitelikliGenc;charset=UTF8", "root", "root");
	}catch(PDOException $Hata){
		echo "Bağlantı Hatası<br />" . $Hata->getMessage();
		die();
	}
	
	function MenuYaz($MenuUstIdDegeri=0, $BoslukDegeri=0){
		global $VeritabaniBaglantisi;
		
		$MenuSorgusu			=	$VeritabaniBaglantisi->prepare("SELECT * FROM menuler WHERE ustid = ?");
		$MenuSorgusu->execute([$MenuUstIdDegeri]);
		$MenuSorugusuSayi		=	$MenuSorgusu->rowCount();
		$MenuSorugusuKayitlari	=	$MenuSorgusu->fetchAll(PDO::FETCH_ASSOC);
		
		if($MenuSorugusuSayi>0){
			foreach($MenuSorugusuKayitlari as $Kayitlar){
				$MenuId			=	 $Kayitlar["id"];
				$MenuUstId		=	 $Kayitlar["ustid"];
				$MenuMenuAdi	=	 $Kayitlar["menuadi"];
				
				echo str_repeat("&nbsp;", $BoslukDegeri);
//				echo str_repeat("-", $BoslukDegeri);
				echo $MenuId . " | " . $MenuUstId . " | " . $MenuMenuAdi . "<br />";
				MenuYaz($MenuId, $BoslukDegeri+10);
			}
		}
	}
	
	MenuYaz();
	
	$VeritabaniBaglantisi	=	null;
	?>
</body>
</html>