<?php

require_once "connection.php";

$userId = $_GET["id"];

$sql = "DELETE FROM a_user WHERE id=?";
$query = $pdo->prepare($sql);
$result = $query->execute([$userId]);

if($result){
    Header("Location: http://localhost:8888/php-mysql-course/hasan-kacar/18.07.2023/project/list.php");
    exit();
}else{
    Header("Location: http://localhost:8888/php-mysql-course/hasan-kacar/18.07.2023/project/list.php");
    exit();
}
