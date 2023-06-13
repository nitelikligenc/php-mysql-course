<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<?php

$adi = $_POST["kullaniciAdi"];
$sifre = $_POST["sifre"];


echo "Adi   ".  $adi;

echo  "<br>";
echo "Sifresi   ". $sifre;

setcookie("formdanGelenAd",$adi);

?>
<br>
<a href='user.php' >Kim Geldi.</a>

</body>
</html>