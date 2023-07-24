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


<h1> Genel Örnekler</h1>

<?php

//TRUNCATE Sql sunucusundaki database içerisinde bulunan herhangi bir tablonun tüm içeriklerini boşaltmak silmek için kullanılır.


$VeritabaniBaglantisi = mysqli_connect("localhost","root","root","kayit");

	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");

	if(mysqli_connect_errno()){
		echo "Bağantı Hatası<br />";
		echo "Hata Açıklaması : " . mysqli_connect_error();
		die();
	}

	$Sorgu		=	mysqli_query($VeritabaniBaglantisi, "TRUNCATE TABLE uye ");
		if($Sorgu){
//			while($Kayitlar=mysqli_fetch_assoc($Sorgu)){
//				echo "ID Değeri : " . $Kayitlar["id"] . "<br />";
//				echo "İsim Değeri : " . $Kayitlar["Deneme"] . "<br />";
//			}
            echo "Tüm tablonun içi boşaltıldı.";
		}else{
			echo "Sorgu Hatası";
		}

	mysqli_close($VeritabaniBaglantisi);


?>


</body>
</html>