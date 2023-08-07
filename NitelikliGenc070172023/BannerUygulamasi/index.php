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
	<?php
	$ReklamSorgusu		=	$VeritabaniBaglantisi->prepare("SELECT * FROM banner ORDER BY gosterimSayisi ASC LIMIT 1");
	$ReklamSorgusu->execute();
	$ReklamSayisi		=	$ReklamSorgusu->rowCount();
	$ReklamKaydi		=	$ReklamSorgusu->fetch(PDO::FETCH_ASSOC);

	?>
	<table width="1000" align="center" border="0" cellpadding="0" cellspacing="0">
		<tr height="150">
			<td align="center"><img src="dosyalar/<?php echo $ReklamKaydi["bannerDosyasi"]; ?>" border="0"></td>
		</tr>
	</table>
</body>
</html>
<?php
$ReklamGuncelle		=	$VeritabaniBaglantisi->prepare("UPDATE banner SET gosterimSayisi=gosterimSayisi+1 WHERE id = ? LIMIT 1");
$ReklamGuncelle->execute([$ReklamKaydi["id"]]);

$VeritabaniBaglantisi	=	null;
?>