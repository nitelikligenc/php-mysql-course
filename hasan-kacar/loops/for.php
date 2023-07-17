<?php

/**
 * for: Belli bir aralığın true değerlerinde işlemi gerçekleştiren döngü yapısıdır
 */

for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}

echo "<br><br>************************<br><br>";


for($i = 0; $i < 5; $i++)
{
    echo $i . "<br>";
}

echo "<br><br>************************<br><br>";
$colors = ["Mavi", "Sarı", "Yeşil", "Turuncu", "Kahverengi", "Beyaz", "Siyah"];
$kontrolDegeri = count($colors);

echo "<pre>";
print_r($colors);
echo "</pre>";

for ($j = 0; $j < $kontrolDegeri; $j++) {
    echo "J : " . $j . "<br>";
    echo $colors[$j] . "<br><br>";
}

echo "<br><br>************************<br><br>";

$cities = ["İzmir", "Denizli", "Ankara", "İstanbul", "Antalya"];
echo "<pre>";
print_r($cities);
echo "</pre>";

$count = count($cities);
echo "Dizi Uuznluğu : " . $count . "<br><br>";

for ($k = $count - 1; $k >= 0 ; $k--) {
    echo "k : $k <br>";
    echo $cities[$k] . "<br><br>";
}