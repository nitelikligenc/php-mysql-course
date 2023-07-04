<?php

/**
 * While: Koşul değeri true olduğu sürece çalışan döngü yapısıdır.
 */

$x = 1;

while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}


echo "<br><br>******************<br><br>";


$isimler = ["Ahmet", "Mehmet", "Ayşe", "Fatma", "Ali"];

echo "<pre>";
print_r($isimler);
echo "</pre>";

$isimDizisiUzunlugu = count($isimler);

/***
 * echo $isimler[0]; => Ahmet
 */

$kontrolDegeri = 0;
while($kontrolDegeri < $isimDizisiUzunlugu){
    echo "Dizinin <b>" . $kontrolDegeri . ".</b> index değerindeki isim değeri: " . $isimler[$kontrolDegeri] . "<br>"; //$isimler[0]
    $kontrolDegeri++;
}