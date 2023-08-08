<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.mynet.com");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSLVERSION, 0);

$response = curl_exec($ch);

if(curl_errno($ch)){
    $error = curl_error($ch);
    echo "Error: " . $error;
    die();
}

curl_close($ch);

echo "CURL Kapandı...";

print_r($response);
