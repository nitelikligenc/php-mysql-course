<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.mynet.com");

if(curl_errno($ch)){
    $error = curl_error($ch);
    echo $error;
}

curl_exec($ch);
curl_close($ch);
