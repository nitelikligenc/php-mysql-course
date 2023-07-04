<?php

$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str); // Outputs 4

echo "<br><br>****************************<br><br>";

$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/im";
preg_match_all($pattern, $str, $result); // Outputs 4
print_r($result);