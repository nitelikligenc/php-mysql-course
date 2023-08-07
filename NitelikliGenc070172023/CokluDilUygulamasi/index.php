<?php
session_start();

if(empty($_SESSION["SiteDili"])){
	include("diltr.php");
}else{
	if($_SESSION["SiteDili"] == "Turkish"){
		include("diltr.php");
	}elseif($_SESSION["SiteDili"] == "English"){
		include("dilen.php");
	}elseif($_SESSION["SiteDili"] == "French"){
		include("dilfr.php");
	}
}
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
	<table width="1000" align="center" border="0">
		<tr height="40">
			<td width="130"><?php echo ANASAYFA; ?></td>
			<td width="155"><?php echo HAKKIMIZDA; ?></td>
			<td width="130"><?php echo ILETISIM; ?></td>
			<td width="373"><?php echo URUNLER; ?></td>
			<td width="190"><a href="secim.php?DilSecimi=Turkish" style="color: #000000; text-decoration: none;">TR</a> | <a href="secim.php?DilSecimi=English" style="color: #000000; text-decoration: none;">EN</a> | <a href="secim.php?DilSecimi=French" style="color: #000000; text-decoration: none;">FR</a></td>
		</tr>
	</table>
</body>
</html>