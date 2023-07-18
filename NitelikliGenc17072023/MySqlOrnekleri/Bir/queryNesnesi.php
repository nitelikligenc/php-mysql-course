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

<h1>Query Nesnesi</h1>

<?php

//mysqli_query() Mysql sunucusuna açılmış olan bir bağlantı dağilinde yeni bir sorgu yapmak için kullanılır.
//ayrica istenirse sorgu işlemi ile alakalı tüm bilgileri bulur ve bulduğu deperlerden yeni bir dizi oluşturarak oluşturduğu dizi değerrini geriye döndürür.

//query() :  Mysql sunucusuna nesnesel yapı ile açılmış olan bir bağlantı dahilinde yeni bir sorgu işlemi ile alakalı tüm bilgileri bulur ve bulduğu değerlerden yeni bir dizi oluşturarark, oluşturduğu dizi değerini geriye döndürür.

$veritabaniBaglantisi = new mysqli("localhost","root","root","ogrenci");

$veritabaniBaglantisi->set_charset("UTF8");
$sorgu = $veritabaniBaglantisi->query("SELECT * FROM profile");

if($sorgu){
    echo  "<pre>";
    print_r($sorgu);
    echo "</pre>";
}else{
    echo "Sorgu boş.Veri yok.";
}
$veritabaniBaglantisi->close();

?>



</body>
</html>