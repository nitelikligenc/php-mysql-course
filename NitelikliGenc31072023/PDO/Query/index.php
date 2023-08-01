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
/*
exec()	:	MySQL sunucusuna PDO ile açılmış olan bağlantı dahilinde yeni bir sorgu işlemi yapmak için kullanılır. Ayrıca istenirse sorgu işleminde etkilenen kayıt sayısını bulmak için kullanılır.
query()	:	MySQL sunucusuna PDO ile açılmış olan bağlantı dahilinde yeni bir sorgu işlemi yapmak için kullanılır. Ayrıca istenirse sorgu işlemi sonucunda dönen tüm veri değerlerini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
    FETCH_ASSOC :	Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide ilgili tablonun sütun isimleri dizinin anahtarları olarak tanımlanır ve ilgili verilere sütun isimleri ile erişilir.
    FETCH_NUM 	:	Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide dizinin anahtarları PHP tarafından otomatik olarak tanımlanır (0,1,2,3...) ve ilgili verilere sütun sıra numaraları ile erişilir.
    FETCH_BOTH 	:	Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide dizinin anahtarları hem ilgili tablonun sütun isimleri ile hemde PHP tarafından otomatik olarak tanımlanır (0,1,2,3...) ve ilgili verilere ister sütun isimleri ile ister sütun sıra numaraları ile erişilir.
    FETCH_OBJ 	:	Tablonun verilerini okuma işlemi sırasında oluşturulacak olan nesnede ilgili tablonun sütun isimleri nesnenin özellikleri olarak tanımlanır ve ilgili verilere sütun isimleri ile erişilir.
*/

try{
    $VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=depo;charset=UTF8", "root", "root");
    echo "Veritabanına Bağlantı Kuruldu<br />";
}catch(PDOException $Hata){
    echo "Veritabanı Bağlantı Hatası<br />";
    echo "Hata Açıklaması : " . $Hata->getMessage();
    die();
}

//$Sorgu	=	$VeritabaniBaglantisi->query("SELECT * FROM uyeler");
$Sorgu	=	$VeritabaniBaglantisi->query("SELECT * FROM kayitlar", PDO::FETCH_ASSOC);;


echo "<pre>";
print_r($Sorgu);
echo "</pre>";


$VeritabaniBaglantisi	=	null;

?>
</body>

</html>