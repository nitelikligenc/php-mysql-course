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

<h1>Connection</h1>

<?php
// mysqli_connect() Kendisine parametre olarak verilen değerler doğrultusunda MYSQL sunucusuna yeni bir bağlantı açmak için kullanılır.Eğer istenirse açılacak olan MySql sunucusunun tüm bağlantı bilgilerini bulur ve buldupu değerlerden yeni bir dizi oluşturarak, oluşturduğu değeri geriye döndürür.

//mysqli_set_charset() Kendisine parametre olarak verilen değerler doğrultusunda daha önce açılmış olan MySql bağlantısına varsayılan istemci karakter setini atamak için kullanılır.

// mysqli_select_db Kendisine parametre olarak verilen değerler doğrultusunda daha önceden açılmış olan MYSql bağlansıtı üzerinden istenilen veritabanını seçmek için kullanılır.

// mysqli_connect_errno() MySql sunucusuna yeni bir bağlantı açma işlemi sırasında olası bir hata kodu değerini bularak bulduğu değeri geriye döndürür.
//mysqli_connect_error MySql sunucusuna yeni bir bağlantı açma islemi sırasında olası bir hata ile karşılaşma durumunda hata açıklama değerini bularak bulduğu değeri geriye döndürür.
//mysqli_close() Kendisine parametre olarak verilen değerler doğrultusunda daha önceden açılmış olan MySql bağlantısını kapatmak için kullanılır.


$veritabaniAdi = "ogrenci";
$veritabaniHostAdresi = "localhost";
$veritabaniKullaniciAdi = "root";
$veritabaniKullaniciSifresi = "root";

$veritabaniBaglantisi = @mysqli_connect($veritabaniHostAdresi,$veritabaniKullaniciAdi,$veritabaniKullaniciSifresi,$veritabaniAdi);

@mysqli_set_charset($veritabaniBaglantisi,"UTF8");

if(mysqli_connect_errno()){
    echo "Veritabani bağlanamadı";
}else{
    echo "Veritabani Bağlandı";

}

echo "<pre>";
print_r($veritabaniBaglantisi);
echo "</pre>";

mysqli_close($veritabaniBaglantisi);

?>




</body>
</html>