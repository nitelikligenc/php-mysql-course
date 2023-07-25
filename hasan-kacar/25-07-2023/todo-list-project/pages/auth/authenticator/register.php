<?php
//$connection = "";
require_once ("../../../base.php");

$userEmail = $_POST["email"];
$userPassword = $_POST["password"];
$userName = $_POST["user_name"];
$userSurname = $_POST["user_surname"];
$userCountry = $_POST["user_country"];
$userCity = $_POST["user_city"];
$userDistrict = $_POST["user_district"];
$userGender = $_POST["user_gender"];
$fullAddress = $_POST["user_full_address"];


$userAddSql = "INSERT INTO user (email, password) values (?, ?)";
$userAddQuery = $connection->prepare($userAddSql);
$result = $userAddQuery->execute([$userEmail, md5($userPassword)]);

if($result){
    $userId = $connection->insert_id;
    $profileAddSql = "INSERT INTO profile (user_id, name, surname, gender, country, city, district, full_address) values (?, ?, ?, ?, ?, ?, ?, ?)";
    $profileAddQuery = $connection->prepare($profileAddSql);
    $profileAddResult = $profileAddQuery->execute([$userId, $userName, $userSurname, $userGender, $userCountry, $userCity, $userDistrict, $fullAddress]);

    if($profileAddResult){
        Header("Location: http://localhost:8888/php-mysql-course/hasan-kacar/25-07-2023/todo-list-project/pages/auth/loginUi.php");
        exit();
    }
}else{
    Header("Location: http://localhost:8888/php-mysql-course/hasan-kacar/25-07-2023/todo-list-project/pages/auth/registerUi.php");
    exit();
}

