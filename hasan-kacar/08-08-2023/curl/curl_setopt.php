<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.mynet.com/");

curl_exec($ch);
curl_close($ch);
