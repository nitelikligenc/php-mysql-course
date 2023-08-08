<?php

$ch = curl_init();

$dosya = fopen("deneme.html", "w");

curl_setopt($ch, CURLOPT_URL, "https://www.mynet.com");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FILE, $dosya);

$response = curl_exec($ch);

if(curl_errno($ch)){
    $error = curl_error($ch);
    echo "Error: " . $error;
    die();
}

curl_close($ch);


echo "Curl Kapandı";
