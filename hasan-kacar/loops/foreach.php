<?php
/**
 * foreach: Array ve object değerlerine tek tek kolay bir şekilde ulaşmamızı sağlayan döngü yapısıdır.
 */

$colors = array("red", "green", "blue", "yellow");

echo "<pre>";
print_r($colors);
echo "</pre>";

foreach ($colors as $key => $value) {
    echo "Key : $key <br>";
    echo "Value : $value <br><br>";
}

echo "<br><br>***********************<br><br>";


$cities = ["ege_bolgesi" => "İzmir", "ic_anadolu_bolgesi" => "Ankara", "marmara_bolgesi" => "İstanbul"];

foreach($cities as $cityKey => $cityValue)
{
    echo $cityKey . "<br>";
    echo $cityValue . "<br><br>";
}