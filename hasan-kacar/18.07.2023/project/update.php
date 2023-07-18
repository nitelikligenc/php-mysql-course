<?php

require_once 'connection.php';

$name = $_POST["name"];
$surname = $_POST["surname"];
$email = $_POST["email"];
$gender = $_POST["gender"];
$userId = $_POST["user_id"];

$sql = "UPDATE a_user SET name=?, surname=?, email=?, gender=? WHERE id = ?";
$query = $pdo->prepare($sql);
$result = $query->execute([$name, $surname, $email, $gender, $userId]);

if($result){
    Header("Location: http://localhost:8888/php-mysql-course/hasan-kacar/18.07.2023/project/list.php");
    exit();
}else{
    Header("Location: http://localhost:8888/php-mysql-course/hasan-kacar/18.07.2023/project/form.php?id=".$userId);
    exit();
}
