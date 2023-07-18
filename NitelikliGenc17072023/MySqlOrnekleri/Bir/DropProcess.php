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

<h1>Drop Database and Table </h1>

<?php

//Drop Database : Mysql sunucusundaki herhangi bir database i silmek için kullanılır.
// Drop Table : Mysql sunucusunun içerisinde bulunan database in içindeki tabloyu silmek için kuallanılır.

$veritabaniBaglantisi = mysqli_connect("localhost","root","root","");

mysqli_set_charset($veritabaniBaglantisi,"UTF8");

$sorgu = mysqli_query($veritabaniBaglantisi,"DROP DATABASE deneme");
if($sorgu){
    echo "Silme işlemi tamamlandı";
}else{
    echo "Silme işlemi tamamlanamadı.";
}
mysqli_close($veritabaniBaglantisi);



?>
</body>
</html>