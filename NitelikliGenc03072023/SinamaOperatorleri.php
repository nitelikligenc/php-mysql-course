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
<h1>Sınama operatorleri</h1>



<?php
// true, false , 1 , 0 ,yes , no
//defined : Belirtilecek olan sabitin varlığımı sınamak için kullanılır.İşlem sonucu daima boolean olarak döner.
//isset : Belirtilecek olan değişkenin veya dizi içerisinde belirtilecek olan anahtarın varlığını sınamak için kullanılır.
//İşlem sonucu boolean döner.
// empty : Belirtilecek olan değişkenin veya dizi içerisinde belitilecek olan anahtarın daha önceden tanımlanmamış olduğunu sınamak için kullanılır. İşlem sonucu daima boolean olarak döner.

//-----------------------------defined---------------------------------------------------

//define("ISIM","Ramazan");
//const ISIM = "Ramazan";
//$kontrol = defined("ISIMM");
//if($kontrol == true){
//    echo "ISIM adında bir sabit VARDIR.";
//}else{
//    echo "ISIM adında bir sabit YOKTUR.";
//}


//-------------------------------isset-------------------------------------------------

//$kontrol = isset($isim);
//if($kontrol == true){
//    echo "isim adında bir değişken vardır";
//}else{
//    echo "isim adında bir değişken yoktur.";
//}


//-------------------------isset array-------------------------------------------------------

//$isimler = array("Ramazan","Kamil","Yasemin","Bahar");
//
//$kontrol = isset($isimler[4]);
//if($kontrol == true){
//    echo "Array de belirtilen anahtar mevcuttur";
//}else{
//    echo "Array de anahtar yoktur.";
//}

///----------------------------------------

//$degerler = [
//  "adi" => "Ramazan",
//  "soyadi" => "AKIN",
//  "bolum" => "Yazilim"
//];
//
//$kontrol = isset($degerler["soyadi"]);
//
//if($kontrol == true){
//
//    echo "Array de anahtar Vardır.";
//}else{
//    echo "Array de anahtar yoktur.";
//}
//
//


//$isim = "rasd";
//$kontrol = empty($isim);
//if($kontrol == true){
//    echo "Yok";
//}else{
//    echo "Var";
//
//}


//---------------- filter_var()------------------------------------------------
//filter_var :  Kendisine parametre olarak verilen değer doğrultusunda içerigi filtreleyerek, içeriğin filtrelemeye uygun olup olmadığını sınamak için kullanılır.İşlem sonucu daima mantıksal yani boolean döner.

//FILTER_VALIDATE_BOOLEAN

//$deger = "yes";
//
//if(filter_var($deger,FILTER_VALIDATE_BOOLEAN)){
//    echo "Boolean veri türündedir.";
//}else{
//    echo "Boolean değildir.";
//
//}
//

//----------------------------

//$ip = "192.168.2.144145142";
//
//if(filter_var($ip,FILTER_VALIDATE_IP)){
//    echo "var";
//}else{
//    echo "Valid değildir";
//}

//-----------------------------------

//$email = "deneme@deneme.com";
//
//if(filter_var($email,FILTER_VALIDATE_EMAIL)){
//    echo "email dogru";
//}else{
//    echo "email yanlis";
//}


//-------------------------
//$url = "http://asdadeneme.com";
//
//if(filter_var($url,FILTER_VALIDATE_URL)){
//    echo "Url geçerli";
//}else{
//    echo "Url geçerli değil";
//}
//

//is_string : Belirtilecek olan değişken içerinin string veri türünde olup olmadığını sınamak için kullanılır Sonuç daima boolean olacaktır.
//is_int : Belirtilecek olan değişken içeriğinin tamsayi int olup olmadığını sınamak için kullanılır. Sonuç daima boolean olacaktır.
//is_integer:  Belirtilecek olan değişken içeriğinin tamsayi int olup olmadığını sınamak için kullanılır. Sonuç daima boolean olacaktır.
//is_long : Belirtilecek olan değişken içeriğin integer veri türünde olup olmadığını sınamak için kullanılır.İşlem sonucu daima boolean olacaktır.
// is_double : Belirtilecek olan değişken içeriğinin double yada float olup olmadığının kontrolünü yapar. İşlem sonucu daima boolean olacaktır.
//is_float : Belirtilecek olan değişken içeriğinin double yada float olup olmadığının kontrolünü yapar. İşlem sonucu daima boolean olacaktır.
//is_real : Belirtilecek olan değişken içeriğinin double yada float olup olmadığının kontrolünü yapar. İşlem sonucu daima boolean olacaktır.
//is_numeric : Belirtilecek olan değişkenin numeric sayisal değer olup olmadığının kontrolünü yapar. işlem sonucu daima boolean olacaktır.
// is_bool:  Belirtilecek olan değişken içeriğinin boolean türünde olup olmadığğının kontrolünü yapar. İşlem sonucu mantıksal yani boolean olarak döner.
// is_null: Belirtilecek olan değişken içeriğinin mantıksal veri türünde olup olmadığını sınamak için kullanılır sonuç daima boolean döner.
//is_resource : Belirtilecek olan değişkenin içerinin kaynak veritüründe olup olmadığının sınamak için kullanılır.Sonuç daima boolen döner.
//is_callable: Belirtilecek olan değişken içeriğinin callable(geri çağırımlar/geri çağırılabilenler)veri turunde olup olmadığını sınamak için kullanılır.Daima boolean veri türünde dönüş yapar.
//is_array: Belirtilecek olan değişkenin içeriğinin array olup olmadığını sınar ve sonuç olarak bize boolean bir değer döndürür.
//is_object: Belirtilecek olan bir değişken içeriğinin object olup olmadığını kontrolünü yapar ve bize boolean bir değer döndürür.



//--------------is_string--------------------

//$değer = "RAMAZAN AKIN";
//if(is_string($değer)){
//    echo "String bir değerdir.";
//}else{
//    echo "String değildir";
//}

//---------------------is_int--------

//$deger = 123;
//if(is_int($deger)){
//    echo    "integer bir değerdir";
//}else{
//    echo "integer değildir.";
//}
//

//---------------------is_long--------

//$deger = 123;
//if(is_long($deger)){
//    echo    "Long bir değerdir";
//}else{
//    echo "Long değildir.";
//}
//

//---------is_double,is_float,is_real-------

//$deger = 12.4;
//if(is_double($deger)){
//    echo "double bir değerdir";
//}else{
//    echo "double değildir";
//}

//------------------is_boolean--------
//$deger = true;
//
//if(is_bool($deger)){
//    echo "boolean bir değerdir";
//}else{
//    echo "boolean bir değer değildir.";
//}


//-------------------is_null ---------

//$deger = null;
//if(is_null($deger)){
//    echo "null degerdir";
//}else{
//    echo  "null degildir";
//}

?>


</body>
</html>