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

<h1>Create Database</h1>

<?php

// Create Database : Mysql sunucusuna yeni bir database eklemek için kullanılır.
// Create Table  : Mysql sunucusundaki bir database içerisine table eklemek oluşturmak için kullanılır.Ayrıca istenirse herhangi bir tablo içerikleriini başka bir tabloyada kopyalamak için kullanılır.

$veritabaniBaglantisi = mysqli_connect("localhost","root","root","");
mysqli_set_charset($veritabaniBaglantisi,"UTF8");

$sorgu = mysqli_query($veritabaniBaglantisi,"Create Database Deneme CHARACTER SET utf8 COLLATE utf8_unicode_ci");

if($sorgu){
    echo "Veritabani Oluşturuldu.";
}else{
    echo "Veritabani var yada oluşturulamadı";
}

mysqli_close($veritabaniBaglantisi);



?>


</body>
</html>