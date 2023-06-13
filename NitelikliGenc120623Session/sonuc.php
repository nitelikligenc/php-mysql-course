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

session_start();

$adi = $_POST["adi"];
$sifre = $_POST["sifre"];


$_SESSION["kullanici"] = ["adi" => $adi,"sifre" => $sifre];


//print_r($_SESSION);

$gelenKisi = $_SESSION["kullanici"]["adi"];
echo "Merhaba Hoşgeldin  " . $gelenKisi
?>

</body>
</html>