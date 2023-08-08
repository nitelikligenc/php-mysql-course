<?php


$ch = curl_init();

$postData = [
    "name" => "Curl Test 2",
    "subject" => "CURL Post Process 2",
    "main_subject" => "CURL Process 2"
];

curl_setopt($ch, CURLOPT_URL, "http://localhost:8888/php-mysql-course/hasan-kacar/08-08-2023/curl/curl_post/post.php");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);

curl_exec($ch);
curl_close($ch);
