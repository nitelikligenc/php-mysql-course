<?php

class Split{
    public function getSplit()
    {
        echo "<br><br>*******************************<br><br>";
    }

    public function patternControl($matches)
    {
        if(count($matches[0]) == 0){
            echo "Aranan değerlere uygun sonuç bulunamadı!";
        }else{
            echo "<pre>";
            print_r($matches);
            echo "</pre>";
        }
    }
}

$split = new Split();


$metin = "PHP Object Oriented programlama dilidir. Backend için yazılır";
//Eger ki aranan deger metnin en başında ise degeri döndürür,degilse döndürmez...
$deger = "/^PHP/";
preg_match_all($deger, $metin,$matches);

//print_r($matches);
$split->patternControl($matches);



$split->getSplit();



$metin2 = "PHP Object Oriented programlama dilidir. Backend için yazılır";
//$ => Aradığımız Kelimenin sonda oluğ olmadığını kontrol eder.
$pattern = "/yazılır$/";
preg_match_all($pattern, $metin2, $matches2);

$split->patternControl($matches2);




$split->getSplit();



echo "+ * ? Ayarları yorum satırında gizlidir!";
//$metin3 = "A AA AAA AAAA AAAAA AAAAAA AAAAAAAA";
//$pattern3 = "/A+/";
//$pattern4 = "/A*/";
//$pattern5 = "/A?/";
//preg_match_all($pattern3, $metin3, $matches3);
//preg_match_all($pattern4, $metin3, $matches4);
//preg_match_all($pattern5, $metin3, $matches5);
//
//$split->patternControl($matches3);
//$split->patternControl($matches4);
//$split->patternControl($matches5);



$split->getSplit();



echo "b ve B Ayarları yorum satırında gizlidir!";
//$metin4 = "PHP Object Oriented programlama dilidir. Backend için yazılır";
//$pattern6 = "/prog\b/";
//$pattern7 = "/\Bogram/";
//preg_match_all($pattern6, $metin4, $matches6);
//preg_match_all($pattern7, $metin4, $matches7);
//
//$split->patternControl($matches6);
//echo "<br>";
//$split->patternControl($matches7);




$split->getSplit();



echo "d ve D Ayarları yorum satırında gizlidir!";
//$metin5 = "Pamukkale Üniversitesi , Php Education, 1923, 1286741782";
//$pattern8 = "/\d/iu";
//$pattern9 = "/\D/iu";
//preg_match_all($pattern8, $metin5, $matches8);
//preg_match_all($pattern9, $metin5, $matches9);
//
//$split->patternControl($matches8);
//$split->patternControl($matches9);




$split->getSplit();


$metin6 = "hasan Kacar AAA ajkshaj asAASDAA";
$pattern10 = "/HAsan/i";
preg_match_all($pattern10, $metin6, $matches10);

$split->patternControl($matches10);



$split->getSplit();


echo "[ ve ] Ayarları yorum satırında gizlidir!";
//$metin7 = "Hasan Kacar - Pamukkale Üniversite - Bilgisayar Mühendisliği - Php - Anonim: test, deneme, cümle bitti .";
//$pattern11 = "/[acp]/i";
//$pattern12 = "/[-0-9A-Za-zıİĞğÇçŞşÜüÖö,:\.]/iu";
////preg_match_all($pattern11, $metin7, $matches11);
//preg_match_all($pattern12, $metin7, $matches12);
//$split->patternControl($matches12);




$split->getSplit();



echo ". Ayarları yorum satırında gizlidir!";
//. => Metinde geçen yeni satır ifadeleri dışında her karakteri bul....
//Yeni Satır Karakterleri => \n \r <br/> NOT => \n ve \r PHP de yazılması doğru olmayan ve işlemi yapmayan degerlerdir....
//$metin8 = "HTML&CSS \n Bootstrap5 \n PHP \n Javascript \n JQuery \n Laravel \n Symfony";
//$pattern13 = "/./iu";
//preg_match_all($pattern13, $metin8, $matches13);
//
//$split->patternControl($matches13);





$split->getSplit();


echo "( ve ) ayaralrı yorum satırında gizlidir!";
//$metin9 = "Hasan Kacar, İhsan , Pamukkale Üniversitesi , Bilgisayar Mühendisliği";
//$pattern14 = "/(H)(a)(s)/";
//$pattern15 = "/(Ha|İh)san/";
//preg_match_all($pattern14, $metin9, $matches14);
//preg_match_all($pattern15, $metin9, $matches15);
//$split->patternControl($matches14);
//$split->patternControl($matches15);


$split->getSplit();



$metin10 = "Hasan Kacar - Pamukkale Üniversite - Bilgisyar Mühendisliği";
$pattern16 = "/-/";
$arrayContent = preg_split($pattern16, $metin10);

$arrayContent2 = explode("-", $metin10);

echo "<pre>";
print_r($arrayContent2);
echo "</pre>";




$split->getSplit();


$metin11 = "Hasan Kacar , PAÜ , 1999 , Denizli , E-Mail";
$pattern17 = "/\s/";
$pattern18 = "/\S/";
preg_match_all($pattern17, $metin11, $matches17);
preg_match_all($pattern18, $metin11, $matches18);

$split->patternControl($matches17);
$split->patternControl($matches18);






$split->getSplit();




$metin12 = "Hasan üniversitesi'de Kacar Pamukkale Üniversitesi'nin Bilgisyar Mühendisliği";
$pattern19 = "/üniversitesi(?='de)/i";
preg_match_all($pattern19, $metin12, $matches19);

$split->patternControl($matches19);
