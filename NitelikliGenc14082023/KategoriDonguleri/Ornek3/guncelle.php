<?php
require_once("baglan.php");

function Filtrele($Deger){
	$Bir	=	trim($Deger);
	$Iki	=	strip_tags($Bir);
	$Uc		=	htmlspecialchars($Iki, ENT_QUOTES);
	$Sonuc	=	$Uc;
	return $Sonuc;
}

$GelenID		=	Filtrele($_GET["id"]);
?>
<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Extra Eğitim</title>
</head>

<body>
	<?php
	function AcilirListeIcinMenuYaz($GuncellenecekMenuID, $GuncellenecekMenuUstID, $MenuUstIdDegeri=0, $BoslukDegeri=0){
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
				
				if($GuncellenecekMenuID!=$MenuId){
					if($GuncellenecekMenuUstID==$MenuId){
						echo "<option value='" . $MenuId . "' selected='selected'>" . str_repeat("&nbsp;", $BoslukDegeri) . $MenuMenuAdi . "</option>";
					}else{
						echo "<option value='" . $MenuId . "'>" . str_repeat("&nbsp;", $BoslukDegeri) . $MenuMenuAdi . "</option>";
					}

					AcilirListeIcinMenuYaz($GuncellenecekMenuID, $GuncellenecekMenuUstID, $MenuId, $BoslukDegeri+5);
				}
			}
		}
	}
	
	$Sorgu			=	$VeritabaniBaglantisi->prepare("SELECT * FROM menuler WHERE id = ? LIMIT 1");
	$Sorgu->execute([$GelenID]);
	$SorguSayi		=	$Sorgu->rowCount();
	$SorguKaydi		=	$Sorgu->fetch(PDO::FETCH_ASSOC);
	?>
	
	Menü Güncelleme Formu<br />
	<form action="guncellesonuc.php?id=<?php echo $SorguKaydi["id"]; ?>" method="post">
		Üst Menü : <select name="UstMenuSecimi">
			<option value="0" <?php if($SorguKaydi["ustid"] == 0){ ?>selected="selected"<?php } ?>>Ana Menü</option>
			<?php AcilirListeIcinMenuYaz($SorguKaydi["id"], $SorguKaydi["ustid"]); ?>
		</select><br />
		Menü Adı : <input type="text" name="MenuAdi" value="<?php echo $SorguKaydi["menuadi"]; ?>"><br />
		<input type="submit" value="Menü Güncelle">
	</form><br /><br /><br />
	
	<?php
	$VeritabaniBaglantisi	=	null;
	?>
</body>
</html>