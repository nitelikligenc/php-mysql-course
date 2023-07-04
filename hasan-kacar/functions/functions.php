<?php

$numbers = [10, 20, 30, 40, 50, 60];

$arrLenngth = count($numbers);
$resultArr = [];
for ($i = 0; $i < $arrLenngth ; $i = $i + 2) {
    $j = $i + 1;
    $result = $numbers[$i] + $numbers[$j];
    array_push($resultArr, $result);
}

echo "<pre>";
print_r($resultArr);
echo "</pre>";



echo "<br><br>********************************<br><br>";

$numbers2 = [70, 80, 90, 100, 110, 120, 130, 140];

function ikiserTopla($array)
{
    $resultArr = [];
    $arrCount = count($array);
    for ($i = 0; $i < $arrCount ; $i = $i + 2) {
        $j = $i + 1;
        $result = $array[$i] + $array[$j];
        array_push($resultArr, $result);
    }

    //return $resultArr;
    echo "<pre>";
    print_r($resultArr);
    echo "</pre>";
}

//$ikiserToplaSonuc = ikiserTopla($numbers2);
//echo "<pre>";
//print_r($ikiserToplaSonuc);
//echo "</pre>";
echo "New Result <br><br>";
ikiserTopla($numbers2);
