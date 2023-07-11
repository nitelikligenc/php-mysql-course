<?php

$asalSayilar = [0, 1, 2];

for ($i = 3; $i <= 30; $i++) {
    $isAsal = true;
    for ($j = 2; $j < $i; $j++) {
//        echo $i . "<br>";
//        echo $j . "<br>";
        if($i % $j == 0){
            $isAsal = false;
        }
    }

    if($isAsal){
        array_push($asalSayilar, $i);
    }
}

echo "<pre>";
print_r($asalSayilar);
echo "</pre>";
