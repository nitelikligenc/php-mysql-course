<?php
try{
	$VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=nitelikliGenc;charset=UTF8", "root", "root");
}catch(PDOException $Hata){
	echo $Hata->getMessage();
	die();
}
?>
<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Nitelikli Genç Denizli</title>
</head>

<body>
	<table width="1000" align="center" border="0" cellpadding="0" cellspacing="0">
		<tr height="30" bgcolor="#000000">
			<td align="left" style="color:white;">&nbsp;Ürün Adı</td>
			<td align="right" style="color:white;">Ürün Fiyatı&nbsp;</td>
		</tr>
		<?php
		$Sorgu			=	$VeritabaniBaglantisi->prepare("SELECT * FROM urunler");
		$Sorgu->execute();
		$SorguSayisi	=	$Sorgu->rowCount();
		$SorguKayitlari	=	$Sorgu->fetchAll(PDO::FETCH_ASSOC);

        $BirinciRenk	=	"#87dd89";
		$IkinciRenk		=	"#e7a9be";
		$RenkIcinSayi	=	0;
		
		foreach($SorguKayitlari as $Satirlar){
			if($RenkIcinSayi%2){
				$ArkaplanRengi	=	$BirinciRenk;
			}else{
				$ArkaplanRengi	=	$IkinciRenk;
			}
		?>
		<tr height="30" bgcolor="<?php echo $ArkaplanRengi; ?>" onMouseOver="this.bgColor='#c2cedb';" onMouseOut="this.bgColor='<?php echo $ArkaplanRengi; ?>';" style="cursor: pointer;">
			<td align="left">&nbsp;<?php echo $Satirlar["urunAdi"]; ?></td>
			<td align="right"><?php echo $Satirlar["urunFiyati"]; ?>&nbsp;</td>
		</tr>
		<?php
			$RenkIcinSayi++;
		}
		?>
	</table>
</body>
</html>
<?php
$VeritabaniBaglantisi	=	null;
?>