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

<h1>Create Table</h1>

<?php

$veritabaniBaglantisi = mysqli_connect("localhost","root","root","Deneme");
mysqli_set_charset($veritabaniBaglantisi,"UTF8");

$sorgu = mysqli_query($veritabaniBaglantisi,"Create Table Ogrenci(
    id int(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    adi varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL                         
)
");
mysqli_close($veritabaniBaglantisi);


?>
</body>
</html>