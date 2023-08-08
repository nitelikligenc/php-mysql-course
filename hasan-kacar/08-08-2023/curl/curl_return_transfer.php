<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.mynet.com/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$curlResponse = curl_exec($ch);
curl_close($ch);


echo "<br><br>**********************************<br><br>";

echo "<pre>";
print_r($curlResponse);
echo "</pre>";
