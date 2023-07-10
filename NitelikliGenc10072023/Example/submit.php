<?php

$gelenSayi1 = $_POST["sayi1"];
$gelenSayi2 = $_POST["sayi2"];

//if(!is_int($gelenSayi1) and !is_int($gelenSayi2)){
//    echo "Sayı Değil";
//}else{
//    $toplam = $gelenSayi1 + $gelenSayi2;
//
//    echo "Sayıların Toplamı ".$toplam;
//}

for($i = 0; $i < $gelenSayi1 ; $i++){
    echo $i;
}





?>