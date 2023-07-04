<?php

$dizi = [
    "color" => "Blue",
    "Denizli",
    "animal" => "Lion",
    "Antalya",
    "Istanbul",
    "device" => "Macbook",
];

echo "<pre>";
print_r($dizi);
echo "</pre>";

echo $dizi["color"] . "<br>";
echo $dizi[0] . "<br>";
echo $dizi["animal"] . "<br>";
echo $dizi[1] . "<br>";
echo $dizi[2] . "<br>";
echo $dizi["device"] . "<br>";

echo "<br><br>*************************<br><br>";

$result = array_flip($dizi);
echo "<pre>";
print_r($result);
echo "</pre>";

echo "<br><br>*************************<br><br>";

$result2 = array_key_exists("animal", $dizi);
if($result2){
    echo $dizi["animal"];
}

echo "<br><br>*************************<br><br>";

$result3 = array_key_first($dizi);
echo $result3;

echo "<br><br>*************************<br><br>";

$result4 = array_key_last($dizi);
echo $result4;

echo "<br><br>*************************<br><br>";

$result5 = array_keys($dizi);
echo "<pre>";
print_r($result5);
echo "</pre>";

/*
echo "<br><br>*************************<br><br>";

$result6 = array_pop($dizi);
echo $result6;

echo "<pre>";
print_r($dizi);
echo "</pre>";
*/
echo "<br><br>*************************<br><br>";

$result7 = array_reverse($dizi, true);
echo "<pre>";
print_r($result7);
echo "</pre>";