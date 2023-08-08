<?php


$ch = curl_init("https://www.mynet.com/");

curl_exec($ch);
curl_close($ch);

