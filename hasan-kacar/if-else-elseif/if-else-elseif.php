<?php

$number = 7;

if($number == 5){
    echo "Sayı 5";
}elseif($number == 7){
    echo "Sayı 7";
}else{
    echo "Sayı 5 Değil";
}


echo "<br><br>**********************<br><br>";

$name = "Hasan";

if($name == "Hasan"){
    echo "<b>Adınız :</b> Hasan";
}elseif($name == "Test.php"){
    echo "<b>Adınız :<b> Test.php";
}else{
    echo "<b>Adınız sistemde herhangi bir isimle uyuşmuyor!<b>";
}


echo "<br><br>**********************<br><br>";


//Shortless If-Else-ElseIf

/*
if($number == 5){
    echo "Sayı 5";
}elseif($number == 7){
    echo "Sayı 7";
}else{
    echo "Sayı 5 Değil";
}
*/

$number2 = 5;
$numberState = false;
$number2 == 6 ? $numberState = "Doğru" : $numberState = "Yanlış";
echo $numberState;



echo "<br><br>**********************<br><br>";


$name = "Test.php";
$nameState = "Yanlış";

/*
if($name == "Hasan"){
    $nameState = "Doğru";
}elseif($name == "Test.php"){
    $nameState = "Test.php";
}else{
    $nameState = "İçerik Bulunamadı";
}
*/
$name == "Hasan" ? $nameState = "Doğru" : ($name == "Test.php" ? $nameState = "Test.php" : $nameState = "İçerik Bulunamadı");
echo $nameState;


